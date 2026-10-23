<?php

declare(strict_types=1);

/**
 * 真实 HTTP 接口联调测试：只读场景链（app token → 广告主级 token → 广告主 → 计划 → 报表 → 余额）。
 *
 * 需要仓库根目录的 .env（APP_ID / SECRET）与外网访问；缺少凭证时全部场景 SKIP 并以 0 退出，
 * 这样在无凭证的机器上也能安全运行。脚本绝不调用任何写接口，输出中永不出现明文 secret
 * 与完整 access token。
 *
 * Run: php ad_open_sdk_php/tests/integration.php
 */

use Oceanengine\Client;
use Oceanengine\Configuration;
use Oceanengine\GenericOpenAPIError;
use Oceanengine\Models\AccountFundGetV30AccountType;
use Oceanengine\Models\Oauth2AccessTokenRequest;
use Oceanengine\Models\Oauth2AppAccessTokenRequest;
use Oceanengine\Models\ReportAdGetV2TimeGranularity;

$vendorAutoload = __DIR__ . '/../vendor/autoload.php';
if (is_file($vendorAutoload)) {
    require $vendorAutoload;
} else {
    spl_autoload_register(static function (string $class): void {
        $prefix = 'Oceanengine\\';
        if (strncmp($class, $prefix, strlen($prefix)) === 0) {
            $file = __DIR__ . '/../src/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
            if (is_file($file)) {
                require $file;
            }
        }
    });
}

const EXIT_OK = 0;
const EXIT_FAILED = 1;
const EXIT_CONFIG = 2;

/** 联调场景名（顺序即执行顺序） */
const SCENARIO_NAMES = [
    '取 app access token',
    '广告主级 access_token（auth_code 换取）',
    '授权广告主列表',
    '广告主信息',
    '广告（计划）列表',
    '投放数据（广告报表）',
    '账户余额',
];

$repoRoot = dirname(__DIR__);
// .env 查找顺序：显式指定 → 包根 → 上级目录（常见于 monorepo：凭证放在工作区根）
$envFile = getenv('OCEANENGINE_ENV_FILE');
if ($envFile === false || trim($envFile) === '') {
    $candidates = [
        $repoRoot . '/.env',
        dirname($repoRoot) . '/.env',
        dirname(dirname($repoRoot)) . '/.env',
    ];
    $envFile = $candidates[0];
    foreach ($candidates as $candidate) {
        if (!is_file($candidate)) {
            continue;
        }
        // 只接受确实带凭证的候选，避免向上误抓无关的 .env
        $parsed = parseEnvFile($candidate);
        $hasAppId = false;
        $hasSecret = false;
        foreach ($parsed as $name => $value) {
            $key = normalizeEnvKey((string)$name);
            if ($key === 'appid' && trim((string)$value) !== '') {
                $hasAppId = true;
            }
            if (($key === 'secret' || $key === 'secert') && trim((string)$value) !== '') {
                $hasSecret = true;
            }
        }
        if ($hasAppId && $hasSecret) {
            $envFile = $candidate;
            break;
        }
    }
}

// --- 需要在输出中抹掉的敏感值 ---------------------------------------------------
/** @var string[] 需要完全替换为 *** 的值（secret） */
$secretValues = [];
/** @var string[] 需要替换为「前 6 位 + ***」的值（access token） */
$tokenValues = [];

/**
 * token 脱敏：只保留前 6 位。
 */
function maskToken(string $value): string
{
    if ($value === '') {
        return '***';
    }
    return substr($value, 0, 6) . '***';
}

/**
 * 对任意待打印文本做脱敏：抹掉 access_token=xxx 参数、已知的 secret 与已知的 token。
 */
function sanitize(string $text): string
{
    global $secretValues, $tokenValues;

    $text = (string)preg_replace_callback(
        '/(access_token|accessToken)=([^&\s"\'<>，。；：、【】（）《》]+)/i',
        static function (array $m): string {
            // 已脱敏的值（带 ***）原样返回，否则会把后面的中文摘要一起吞掉
            if (str_contains($m[2], '***')) {
                return $m[0];
            }
            return $m[1] . '=' . maskToken($m[2]);
        },
        $text
    );
    foreach ($secretValues as $secret) {
        if ($secret !== '') {
            $text = str_replace($secret, '***', $text);
        }
    }
    foreach ($tokenValues as $token) {
        if ($token !== '') {
            $text = str_replace($token, maskToken($token), $text);
            // token 以 URL 编码形态出现时同样要掩码
            $decoded = rawurldecode($token);
            if ($decoded !== $token && $decoded !== '') {
                $text = str_replace($decoded, maskToken($token), $text);
            }
        }
    }
    return $text;
}

/**
 * 打印一行到 stdout（自动脱敏）。
 */
function out(string $line): void
{
    echo sanitize($line) . "\n";
}

/**
 * 打印一行到 stderr（自动脱敏）。
 */
function err(string $line): void
{
    fwrite(STDERR, sanitize($line) . "\n");
}

// PHP 的 warning/notice 可能带出完整请求 URL（其中含 access_token），统一经脱敏后输出
set_error_handler(static function (int $severity, string $message): bool {
    fwrite(STDERR, sanitize($message) . "\n");
    return true;
});

// ---------------------------------------------------------------------------
// .env 解析
// ---------------------------------------------------------------------------

/**
 * 去掉值末尾的行尾注释（只认引号外、且前面是空白的 # 或 ;）。
 */
function stripInlineComment(string $value): string
{
    $len = strlen($value);
    $quote = '';
    for ($i = 0; $i < $len; $i++) {
        $ch = $value[$i];
        if ($quote !== '') {
            if ($ch === $quote) {
                $quote = '';
            }
            continue;
        }
        if ($ch === '"' || $ch === "'") {
            $quote = $ch;
            continue;
        }
        if ($ch === '#' || $ch === ';') {
            if ($i === 0 || $value[$i - 1] === ' ' || $value[$i - 1] === "\t") {
                return rtrim(substr($value, 0, $i));
            }
        }
    }
    return $value;
}

/**
 * 解析 .env 文件：跳过注释行、剥离 export 前缀、去首尾引号、容忍 CRLF。
 */
function parseEnvFile(string $path): array
{
    if (!is_file($path) || !is_readable($path)) {
        return [];
    }
    $raw = (string)file_get_contents($path);
    $raw = str_replace(["\r\n", "\r"], "\n", $raw);
    if (strncmp($raw, "\xEF\xBB\xBF", 3) === 0) {
        $raw = substr($raw, 3);
    }

    $values = [];
    foreach (explode("\n", $raw) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#' || $line[0] === ';') {
            continue;
        }
        if (strncmp($line, 'export ', 7) === 0) {
            $line = trim(substr($line, 7));
        }
        $pos = strpos($line, '=');
        if ($pos === false) {
            continue;
        }
        $key = trim(substr($line, 0, $pos));
        if ($key === '') {
            continue;
        }
        $value = trim(stripInlineComment(trim(substr($line, $pos + 1))));
        if (strlen($value) >= 2) {
            $first = $value[0];
            $last = $value[strlen($value) - 1];
            if (($first === '"' && $last === '"') || ($first === "'" && $last === "'")) {
                $value = substr($value, 1, -1);
            }
        }
        $values[$key] = $value;
    }
    return $values;
}

/**
 * 归一化配置键：大小写、下划线、连字符都不敏感（APP_ID / app_id / AppId 等价）。
 */
function normalizeEnvKey(string $key): string
{
    return strtolower(str_replace(['_', '-', ' '], '', trim($key)));
}

/**
 * 读取配置：进程环境变量优先于 .env（便于 CI 注入）；键名大小写不敏感。
 */
function envValue(array $fileEnv, string $key): ?string
{
    $wanted = normalizeEnvKey($key);

    // 进程环境：只接受精确键或 OCEANENGINE_ 前缀键，避免误取同名环境变量
    $processEnv = getenv();
    if (is_array($processEnv)) {
        foreach ([$key, 'OCEANENGINE_' . strtoupper($key)] as $candidate) {
            if (array_key_exists($candidate, $processEnv)
                && $processEnv[$candidate] !== false
                && $processEnv[$candidate] !== ''
            ) {
                return (string)$processEnv[$candidate];
            }
        }
    }

    foreach ($fileEnv as $name => $value) {
        if (normalizeEnvKey((string)$name) === $wanted) {
            return (string)$value;
        }
    }
    return null;
}

function isTruthy(string $value): bool
{
    $value = strtolower(trim($value));
    return in_array($value, ['1', 'true', 'yes', 'on'], true);
}

/**
 * 校验 Y-m-d 日期；非法返回 null。
 */
function parseDate(string $value): ?DateTimeImmutable
{
    $value = trim($value);
    if ($value === '') {
        return null;
    }
    $date = DateTimeImmutable::createFromFormat('!Y-m-d', $value);
    if ($date === false || $date->format('Y-m-d') !== $value) {
        return null;
    }
    return $date;
}

$fileEnv = parseEnvFile($envFile);

$appIdRaw = trim((string)(envValue($fileEnv, 'APP_ID') ?? ''));
// 兼容历史拼写 SECERT
$secretRaw = trim((string)(envValue($fileEnv, 'SECRET') ?? ''));
if ($secretRaw === '') {
    $secretRaw = trim((string)(envValue($fileEnv, 'SECERT') ?? ''));
}
$advertiserIdRaw = trim((string)(envValue($fileEnv, 'ADVERTISER_ID') ?? ''));
$authCodeRaw = trim((string)(envValue($fileEnv, 'AUTH_CODE') ?? ''));
$accountIdsRaw = trim((string)(envValue($fileEnv, 'ACCOUNT_IDS') ?? ''));
$startDateRaw = trim((string)(envValue($fileEnv, 'START_DATE') ?? ''));
$endDateRaw = trim((string)(envValue($fileEnv, 'END_DATE') ?? ''));
$apiHost = trim((string)(envValue($fileEnv, 'API_HOST') ?? ''));
$apiScheme = trim((string)(envValue($fileEnv, 'API_SCHEME') ?? ''));
$timeoutRaw = trim((string)(envValue($fileEnv, 'TIMEOUT') ?? ''));
$strictRaw = trim((string)(envValue($fileEnv, 'STRICT') ?? ''));

// 可选覆盖项（进阶用法，README 有说明）
$accountTypeRaw = trim((string)(envValue($fileEnv, 'ACCOUNT_TYPE') ?? ''));
$reportFieldsRaw = trim((string)(envValue($fileEnv, 'REPORT_FIELDS') ?? ''));

if ($apiHost === '') {
    $apiHost = 'api.oceanengine.com';
}
if ($apiScheme === '') {
    $apiScheme = 'https';
}
$timeout = 60;
if ($timeoutRaw !== '') {
    if (!is_numeric($timeoutRaw) || (int)$timeoutRaw <= 0) {
        err('[ERROR] 配置错误：TIMEOUT 必须是正整数秒数');
        exit(EXIT_CONFIG);
    }
    $timeout = (int)$timeoutRaw;
}
$strict = isTruthy($strictRaw);

// --- 缺凭证处理 ---------------------------------------------------------------
if ($appIdRaw === '' || $secretRaw === '') {
    if ($strict) {
        err('[ERROR] 配置错误：STRICT 模式下缺少凭证（APP_ID / SECRET）');
        exit(EXIT_CONFIG);
    }
    out('[INFO] 未检测到有效凭证（APP_ID / SECRET），全部联调场景已跳过。');
    out('[INFO] 配置步骤：');
    out('[INFO]   1. 复制模板：cp .env.example .env');
    out('[INFO]   2. 在 ' . $envFile . ' 中填入 APP_ID 与 SECRET');
    out('[INFO]   3. 重新运行：php tests/integration.php');
    out('[INFO] 可用环境变量 OCEANENGINE_ENV_FILE 指向其它 .env；进程环境变量优先于 .env。');
    $skipped = 0;
    foreach (SCENARIO_NAMES as $name) {
        out('[SKIP] ' . $name . ' — credentials missing（0ms）');
        $skipped++;
    }
    out(sprintf('[RESULT] 通过 0，跳过 %d，失败 0', $skipped));
    err('[WARN] integration skipped: credentials missing');
    exit(EXIT_OK);
}

// --- 凭证格式校验 -------------------------------------------------------------
if (!is_numeric($appIdRaw)) {
    err('[ERROR] 配置错误：APP_ID 必须是数字（当前值：' . sanitize($appIdRaw) . '）');
    exit(EXIT_CONFIG);
}
$appId = (int)$appIdRaw;
$secretValues[] = $secretRaw;
if ($authCodeRaw !== '') {
    // auth_code 是一次性授权凭证，异常摘要里也不应出现
    $secretValues[] = $authCodeRaw;
}

// --- 日期区间 -----------------------------------------------------------------
$endDate = $endDateRaw !== '' ? parseDate($endDateRaw) : new DateTimeImmutable('yesterday');
if ($endDate === null) {
    err('[ERROR] 配置错误：END_DATE 必须是 YYYY-MM-DD 格式');
    exit(EXIT_CONFIG);
}
$startDate = $startDateRaw !== '' ? parseDate($startDateRaw) : $endDate->modify('-6 days');
if ($startDate === null) {
    err('[ERROR] 配置错误：START_DATE 必须是 YYYY-MM-DD 格式');
    exit(EXIT_CONFIG);
}
if ($startDate > $endDate) {
    err('[ERROR] 配置错误：START_DATE（' . $startDate->format('Y-m-d') . '）不能晚于 END_DATE（' . $endDate->format('Y-m-d') . '）');
    exit(EXIT_CONFIG);
}
$startDateStr = $startDate->format('Y-m-d');
$endDateStr = $endDate->format('Y-m-d');

// --- 其余可选配置 -------------------------------------------------------------
$configuredAdvertiserId = null;
if ($advertiserIdRaw !== '') {
    if (!is_numeric($advertiserIdRaw)) {
        err('[ERROR] 配置错误：ADVERTISER_ID 必须是数字');
        exit(EXIT_CONFIG);
    }
    $configuredAdvertiserId = (int)$advertiserIdRaw;
}

$accountIds = [];
foreach (explode(',', $accountIdsRaw) as $item) {
    $item = trim($item);
    if ($item === '') {
        continue;
    }
    if (!is_numeric($item)) {
        err('[ERROR] 配置错误：ACCOUNT_IDS 必须是逗号分隔的数字，当前值：' . sanitize($item));
        exit(EXIT_CONFIG);
    }
    $accountIds[] = (int)$item;
}

if ($accountTypeRaw === '') {
    $accountType = AccountFundGetV30AccountType::AD_AccountFundGetV30AccountType;
} elseif (AccountFundGetV30AccountType::isValid($accountTypeRaw)) {
    $accountType = $accountTypeRaw;
} else {
    err('[ERROR] 配置错误：ACCOUNT_TYPE 必须是 ' . implode('/', AccountFundGetV30AccountType::ALLOWED_VALUES) . ' 之一');
    exit(EXIT_CONFIG);
}

$reportFields = ['cost', 'click', 'convert'];
if ($reportFieldsRaw !== '') {
    $parsed = [];
    foreach (explode(',', $reportFieldsRaw) as $item) {
        $item = trim($item);
        if ($item !== '') {
            $parsed[] = $item;
        }
    }
    if ($parsed !== []) {
        $reportFields = $parsed;
    }
}

// ---------------------------------------------------------------------------
// 客户端
// ---------------------------------------------------------------------------

if ($apiScheme !== 'https' && !preg_match('/^(127\.0\.0\.1|localhost|\[?::1\]?)/i', $apiHost)) {
    err('[WARN] API_SCHEME=' . $apiScheme . '：凭证将以明文传输，仅建议用于本地 mock 服务');
}

$configuration = new Configuration($apiHost, $apiScheme);
$client = Client::init($configuration);

/**
 * 可配置超时的 cURL transport。
 *
 * SDK 内置 transport 把超时写死为 60 秒，而 src/ 属于生成代码不可修改，
 * 因此联调脚本自带一个最小 transport，让 TIMEOUT 配置真正生效。
 */
$client->getApiClient()->setTransport(static function (array $ctx) use ($timeout): array {
    $method = strtoupper((string)($ctx['method'] ?? 'GET'));
    $url = (string)($ctx['url'] ?? '');
    $headers = (array)($ctx['headers'] ?? []);
    $body = $ctx['body'] ?? null;

    $ch = curl_init();
    if ($ch === false) {
        throw new GenericOpenAPIError('Failed to initialise cURL handle', '', null, 0);
    }

    $headerLines = [];
    foreach ($headers as $name => $value) {
        $headerLines[] = $name . ': ' . $value;
    }
    if ($body !== null && $body !== '' && !isset($headers['Content-Type']) && !isset($headers['content-type'])) {
        $headerLines[] = 'Content-Type: application/json';
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, min(10, $timeout));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    if ($headerLines !== []) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerLines);
    }
    if ($body !== null && $body !== '') {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    }

    $raw = curl_exec($ch);
    if ($raw === false) {
        $curlError = curl_error($ch);
        curl_close($ch);
        throw new GenericOpenAPIError('Transport error: ' . $curlError, '', null, 0);
    }
    $statusCode = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    return ['statusCode' => $statusCode, 'headers' => [], 'body' => (string)$raw];
});

// ---------------------------------------------------------------------------
// 场景执行
// ---------------------------------------------------------------------------

/** @var array<int, array{name:string,status:string,summary:string,ms:int}> */
$results = [];

function record(string $name, string $status, string $summary, float $startedAt): void
{
    global $results;
    $ms = (int)round((microtime(true) - $startedAt) * 1000);
    $results[] = ['name' => $name, 'status' => $status, 'summary' => $summary, 'ms' => $ms];
    out(sprintf('[%s] %s — %s（%dms）', $status, $name, $summary, $ms));
}

/**
 * 统一处理 HTTP 429 限流：等待 2 秒后重试一次，仍失败则抛出。
 */
function callWithRetry(callable $fn)
{
    try {
        return $fn();
    } catch (GenericOpenAPIError $e) {
        if ($e->getStatusCode() === 429) {
            sleep(2);
            return $fn();
        }
        throw $e;
    }
}

/**
 * 把失败原因整理成一行摘要（不泄露凭证）。
 */
function describeThrowable(Throwable $e): string
{
    if ($e instanceof GenericOpenAPIError) {
        $message = $e->getMessage() . '（HTTP ' . $e->getStatusCode() . '）';
        $model = $e->getModel();
        if (is_object($model) && method_exists($model, 'getMessage')) {
            $message .= ' message=' . (string)$model->getMessage();
        }
        if (is_object($model) && method_exists($model, 'getRequestId')) {
            $requestId = (string)$model->getRequestId();
            if ($requestId !== '') {
                $message .= ' request_id=' . $requestId;
            }
        }
        return $message;
    }
    return $e->getMessage();
}

out('[INFO] 被测地址：' . $configuration->getBasePath() . '（超时 ' . $timeout . 's，报表区间 ' . $startDateStr . ' ~ ' . $endDateStr . '）');

$appToken = null;
$advertiserToken = null;
$advertiserIds = [];
$advertiserId = $configuredAdvertiserId;
$appAccessTokenRequest = (new Oauth2AppAccessTokenRequest())
    ->setAppId($appId)
    ->setSecret($secretRaw);

// --- 场景 1：取 app access token ------------------------------------------------
$startedAt = microtime(true);
try {
    $response = callWithRetry(static function () use ($client, $appAccessTokenRequest) {
        return $client->oauth2AppAccessTokenApi()->post()
            ->oauth2AppAccessTokenRequest($appAccessTokenRequest)
            ->execute();
    });
    if ($response->getCode() !== 0) {
        record(SCENARIO_NAMES[0], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
    } else {
        $appToken = (string)($response->getData() ? $response->getData()->getAccessToken() : '');
        $tokenValues[] = $appToken;
        $expiresIn = $response->getData() ? (int)$response->getData()->getExpiresIn() : 0;
        if ($appToken === '') {
            record(SCENARIO_NAMES[0], 'FAIL', '响应中没有 access_token', $startedAt);
            $appToken = null;
        } else {
            record(SCENARIO_NAMES[0], 'PASS', 'token=' . maskToken($appToken) . '，有效期 ' . $expiresIn . 's', $startedAt);
        }
    }
} catch (Throwable $e) {
    record(SCENARIO_NAMES[0], 'FAIL', describeThrowable($e), $startedAt);
}

// --- 场景 2：广告主级 access_token（auth_code 换取）------------------------------
$startedAt = microtime(true);
if ($authCodeRaw === '') {
    record(SCENARIO_NAMES[1], 'SKIP', '未配置 AUTH_CODE：在开放平台完成广告主授权后，将回调中的 auth_code 填入 .env 的 AUTH_CODE；开发者快速入门见 https://open.oceanengine.com/labels/7/docs/1696710498372623', $startedAt);
} else {
    $accessTokenRequest = (new Oauth2AccessTokenRequest())
        ->setAppId($appId)
        ->setSecret($secretRaw)
        ->setAuthCode($authCodeRaw);
    try {
        $response = callWithRetry(static function () use ($client, $accessTokenRequest) {
            return $client->oauth2AccessTokenApi()->post()
                ->oauth2AccessTokenRequest($accessTokenRequest)
                ->execute();
        });
        if ($response->getCode() !== 0) {
            record(SCENARIO_NAMES[1], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
        } else {
            $data = $response->getData();
            $advertiserToken = $data ? (string)$data->getAccessToken() : '';
            $tokenValues[] = $advertiserToken;
            $refreshToken = $data ? (string)$data->getRefreshToken() : '';
            if ($refreshToken !== '') {
                $tokenValues[] = $refreshToken;
            }
            $advertiserIds = $data ? ((array)$data->getAdvertiserIds()) : [];
            $expiresIn = $data ? (int)$data->getExpiresIn() : 0;
            if ($advertiserToken === '') {
                record(SCENARIO_NAMES[1], 'FAIL', '响应中没有 access_token', $startedAt);
                $advertiserToken = null;
            } else {
                if ($advertiserId === null && $advertiserIds !== []) {
                    $advertiserId = (int)$advertiserIds[0];
                }
                record(SCENARIO_NAMES[1], 'PASS', 'access_token=' . maskToken($advertiserToken) . '，有效期 ' . $expiresIn . 's，广告主数 ' . count($advertiserIds), $startedAt);
            }
        }
    } catch (Throwable $e) {
        record(SCENARIO_NAMES[1], 'FAIL', describeThrowable($e), $startedAt);
    }
}

// 业务接口优先用广告主级 token，没有才退回 app 级 token
$businessToken = $advertiserToken ?? $appToken;

// --- 场景 3：授权广告主列表 ------------------------------------------------------
$advertiserList = [];
$advertiserListOk = false;
$startedAt = microtime(true);
$listToken = $appToken ?? $advertiserToken;
if ($listToken === null) {
    record(SCENARIO_NAMES[2], 'SKIP', '无 access token', $startedAt);
} else {
    try {
        $response = callWithRetry(static function () use ($client, $listToken) {
            return $client->oauth2AdvertiserGetApi()->get()
                ->accessToken($listToken)
                ->execute();
        });
        if ($response->getCode() !== 0) {
            record(SCENARIO_NAMES[2], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
        } else {
            $advertiserList = $response->getData() ? ((array)$response->getData()->getList()) : [];
            $advertiserListOk = true;
            $count = count($advertiserList);
            if ($count === 0) {
                record(SCENARIO_NAMES[2], 'PASS', '授权账户数 0', $startedAt);
            } else {
                $first = $advertiserList[0];
                $firstId = (int)($first->getAdvertiserId() ?: $first->getAccountId());
                if ($advertiserId === null) {
                    $advertiserId = $firstId;
                }
                record(SCENARIO_NAMES[2], 'PASS', '授权账户数 ' . $count . '，使用 advertiser_id=' . (int)$advertiserId, $startedAt);
            }
        }
    } catch (Throwable $e) {
        record(SCENARIO_NAMES[2], 'FAIL', describeThrowable($e), $startedAt);
    }
}

// 取不到 advertiser_id 时区分原因，便于定位是「没授权」还是「没 token」
if ($advertiserListOk && $advertiserList === []) {
    $noAdvertiserReason = 'no authorized advertisers（该应用未授权任何广告主：请在开放平台完成广告主授权后重跑，或在 .env 配置 ADVERTISER_ID / AUTH_CODE）';
} elseif (!$advertiserListOk) {
    $noAdvertiserReason = 'no authorized advertisers（授权广告主列表获取失败：请在 .env 配置 ADVERTISER_ID / AUTH_CODE）';
} else {
    $noAdvertiserReason = 'no authorized advertisers（未取到 advertiser_id：请在 .env 配置 ADVERTISER_ID / AUTH_CODE）';
}

// --- 场景 4：广告主信息 ----------------------------------------------------------
$startedAt = microtime(true);
if ($businessToken === null) {
    record(SCENARIO_NAMES[3], 'SKIP', '无 access token', $startedAt);
} elseif ($advertiserId === null) {
    record(SCENARIO_NAMES[3], 'SKIP', $noAdvertiserReason, $startedAt);
} else {
    try {
        $response = callWithRetry(static function () use ($client, $businessToken, $advertiserId) {
            return $client->advertiserInfoV2Api()->get()
                ->advertiserIds([(int)$advertiserId])
                ->accessToken($businessToken)
                ->execute();
        });
        if ($response->getCode() !== 0) {
            record(SCENARIO_NAMES[3], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
        } else {
            $data = (array)$response->getData();
            $first = $data === [] ? null : $data[0];
            $infoId = $first !== null && method_exists($first, 'getId') ? (int)$first->getId() : (int)$advertiserId;
            $name = $first !== null && method_exists($first, 'getName') ? (string)$first->getName() : '';
            record(SCENARIO_NAMES[3], 'PASS', 'advertiser_id=' . $infoId . ($name !== '' ? '，name=' . $name : ''), $startedAt);
        }
    } catch (Throwable $e) {
        record(SCENARIO_NAMES[3], 'FAIL', describeThrowable($e), $startedAt);
    }
}

// --- 场景 5：广告（计划）列表 ----------------------------------------------------
$startedAt = microtime(true);
if ($businessToken === null) {
    record(SCENARIO_NAMES[4], 'SKIP', '无 access token', $startedAt);
} elseif ($advertiserId === null) {
    record(SCENARIO_NAMES[4], 'SKIP', $noAdvertiserReason, $startedAt);
} else {
    try {
        $response = callWithRetry(static function () use ($client, $businessToken, $advertiserId) {
            return $client->promotionListV30Api()->get()
                ->advertiserId((int)$advertiserId)
                ->page(1)
                ->pageSize(10)
                ->accessToken($businessToken)
                ->execute();
        });
        if ($response->getCode() !== 0) {
            record(SCENARIO_NAMES[4], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
        } else {
            $data = $response->getData();
            $list = $data ? ((array)$data->getList()) : [];
            $total = $data && $data->getPageInfo() ? (int)$data->getPageInfo()->getTotalNumber() : count($list);
            record(SCENARIO_NAMES[4], 'PASS', '计划数 ' . count($list) . '，total_number=' . $total, $startedAt);
        }
    } catch (Throwable $e) {
        record(SCENARIO_NAMES[4], 'FAIL', describeThrowable($e), $startedAt);
    }
}

// --- 场景 6：投放数据（广告报表） ------------------------------------------------
$startedAt = microtime(true);
if ($businessToken === null) {
    record(SCENARIO_NAMES[5], 'SKIP', '无 access token', $startedAt);
} elseif ($advertiserId === null) {
    record(SCENARIO_NAMES[5], 'SKIP', $noAdvertiserReason, $startedAt);
} else {
    try {
        $response = callWithRetry(static function () use ($client, $businessToken, $advertiserId, $startDateStr, $endDateStr, $reportFields) {
            return $client->reportAdGetV2Api()->get()
                ->advertiserId((int)$advertiserId)
                ->startDate($startDateStr)
                ->endDate($endDateStr)
                ->fields($reportFields)
                ->timeGranularity(ReportAdGetV2TimeGranularity::STAT_TIME_GRANULARITY_DAILY_ReportAdGetV2TimeGranularity)
                ->page(1)
                ->pageSize(20)
                ->accessToken($businessToken)
                ->execute();
        });
        if ($response->getCode() !== 0) {
            record(SCENARIO_NAMES[5], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
        } else {
            $data = $response->getData();
            $list = $data ? ((array)$data->getList()) : [];
            $total = $data && $data->getPageInfo() ? (int)$data->getPageInfo()->getTotalNumber() : count($list);
            record(SCENARIO_NAMES[5], 'PASS', '报表行数 ' . count($list) . '，total_number=' . $total . '，区间 ' . $startDateStr . '~' . $endDateStr, $startedAt);
        }
    } catch (Throwable $e) {
        record(SCENARIO_NAMES[5], 'FAIL', describeThrowable($e), $startedAt);
    }
}

// --- 场景 7：账户余额 ------------------------------------------------------------
$startedAt = microtime(true);
if ($businessToken === null) {
    record(SCENARIO_NAMES[6], 'SKIP', '无 access token', $startedAt);
} elseif ($accountIds === []) {
    record(SCENARIO_NAMES[6], 'SKIP', '未配置 ACCOUNT_IDS', $startedAt);
} else {
    try {
        $response = callWithRetry(static function () use ($client, $businessToken, $accountIds, $accountType) {
            return $client->accountFundGetV30Api()->get()
                ->accountIds($accountIds)
                ->accountType($accountType)
                ->accessToken($businessToken)
                ->execute();
        });
        if ($response->getCode() !== 0) {
            record(SCENARIO_NAMES[6], 'FAIL', 'code=' . (string)$response->getCode() . ' message=' . (string)$response->getMessage() . ' request_id=' . (string)$response->getRequestId(), $startedAt);
        } else {
            $data = $response->getData();
            $list = $data ? ((array)$data->getList()) : [];
            $first = $list === [] ? null : $list[0];
            $balance = $first !== null && method_exists($first, 'getBalance') ? (string)$first->getBalance() : '';
            record(SCENARIO_NAMES[6], 'PASS', '账户数 ' . count($list) . ($balance !== '' ? '，balance=' . $balance : ''), $startedAt);
        }
    } catch (Throwable $e) {
        record(SCENARIO_NAMES[6], 'FAIL', describeThrowable($e), $startedAt);
    }
}

// ---------------------------------------------------------------------------
// 汇总
// ---------------------------------------------------------------------------

$passed = 0;
$skipped = 0;
$failed = 0;
foreach ($results as $result) {
    if ($result['status'] === 'PASS') {
        $passed++;
    } elseif ($result['status'] === 'SKIP') {
        $skipped++;
    } else {
        $failed++;
    }
}
out(sprintf('[RESULT] 通过 %d，跳过 %d，失败 %d', $passed, $skipped, $failed));

exit($failed === 0 ? EXIT_OK : EXIT_FAILED);
