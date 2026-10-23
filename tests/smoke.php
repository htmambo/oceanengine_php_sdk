<?php

declare(strict_types=1);

/**
 * 集成冒烟测试：模型序列化/反序列化 + Client 全链路（fake transport，可离线运行）。
 * Run: php ad_open_sdk_php/tests/smoke.php
 */

spl_autoload_register(static function (string $class): void {
    $prefix = 'Oceanengine\\';
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $file = __DIR__ . '/../src/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (is_file($file)) {
            require $file;
        }
    }
});

use Oceanengine\Client;
use Oceanengine\Configuration;
use Oceanengine\GenericOpenAPIError;
use Oceanengine\Models\AccountFundGetV30AccountType;
use Oceanengine\Models\AccountFundGetV30Response;
use Oceanengine\Models\AccountFundGetV30ResponseData;
use Oceanengine\Models\AccountFundGetV30ResponseDataListInner;
use Oceanengine\Models\FileMaterialBindV2Request;

$failures = 0;
$checks = 0;

function check(bool $cond, string $label): void
{
    global $failures, $checks;
    $checks++;
    if ($cond) {
        echo "PASS: {$label}\n";
    } else {
        $failures++;
        echo "FAIL: {$label}\n";
    }
}

// --- 1. Request 模型 jsonSerialize：snake_case 键名 + null 字段跳过 ------------
$body = (new FileMaterialBindV2Request())
    ->setAdvertiserId(123)
    ->setImageIds(['70001', '70002']);
// videoIds / carouselIds / targetAdvertiserIds 保持 null
$json = $body->jsonSerialize();
check($json === [
    'advertiser_id' => 123,
    'image_ids' => ['70001', '70002'],
], 'FileMaterialBindV2Request jsonSerialize snake_case + null 跳过: ' . json_encode($json));
check(json_encode($body) === '{"advertiser_id":123,"image_ids":["70001","70002"]}', 'json_encode 与 jsonSerialize 一致');

// --- 2. enum 常量类 ------------------------------------------------------------
check(AccountFundGetV30AccountType::fromValue('AD') === 'AD', 'enum fromValue(AD) === AD');
$thrown = null;
try {
    AccountFundGetV30AccountType::fromValue('NOT_A_TYPE');
} catch (InvalidArgumentException $e) {
    $thrown = $e;
}
check($thrown instanceof InvalidArgumentException, 'enum fromValue 非法值抛 InvalidArgumentException');

// --- 3. Response 模型 fromArray 递归 --------------------------------------------
$resp = AccountFundGetV30Response::fromArray([
    'code' => 0,
    'message' => 'ok',
    'request_id' => 'req-1',
    'data' => [
        'list' => [
            ['account_id' => 111, 'balance' => 100],
            ['account_id' => 222, 'balance' => 200],
        ],
    ],
]);
check($resp instanceof AccountFundGetV30Response, 'fromArray 返回 AccountFundGetV30Response');
check($resp->getCode() === 0 && $resp->getMessage() === 'ok', 'fromArray 顶层标量字段');
$data = $resp->getData();
check($data instanceof AccountFundGetV30ResponseData, 'fromArray 嵌套 data 对象类型');
$list = $data->getList();
check(is_array($list) && count($list) === 2, 'fromArray data.list 数组长度');
check($list[0] instanceof AccountFundGetV30ResponseDataListInner, 'fromArray list 元素类型');
check($list[0]->getAccountId() === 111 && $list[0]->getBalance() === 100, 'fromArray list 元素标量值');
check($list[1]->getAccountId() === 222, 'fromArray list 第二个元素');

// --- 4. 全链路：Client::init + fake transport ------------------------------------
$client = Client::init(Configuration::default());

$captured = null;
$client->getApiClient()->setTransport(static function (array $ctx) use (&$captured): array {
    $captured = $ctx;
    return [
        'statusCode' => 200,
        'headers' => ['Content-Type' => 'application/json'],
        'body' => '{"code":0,"message":"ok","request_id":"req-2","data":{"list":[{"account_id":111,"balance":100}]}}',
    ];
});

$model = $client->accountFundGetV30Api()->get()
    ->accountIds([1, 2])
    ->accountType('AD')
    ->accessToken('tk')
    ->execute();

check($model instanceof AccountFundGetV30Response, 'execute 返回 AccountFundGetV30Response');
check($model->getCode() === 0, 'execute 响应模型 code === 0');
check($model->getData()->getList()[0]->getAccountId() === 111, 'execute 响应模型嵌套数据');

check($captured !== null, 'fake transport 收到请求');
check($captured['method'] === 'GET', '请求方法为 GET');
$parsed = parse_url($captured['url']);
check($parsed['path'] === '/open_api/v3.0/account/fund/get/', 'URL path 正确: ' . ($parsed['path'] ?? ''));
check(($parsed['query'] ?? '') === 'account_ids=[1%2C2]&account_type=AD', 'URL query 序列化（Go 语义，数组 json + 字面方括号）: ' . ($parsed['query'] ?? ''));
check(str_starts_with($captured['url'], 'https://api.oceanengine.com'), 'URL 拼接了 getBasePath()');
$headers = $captured['headers'] ?? [];
check(($headers['Access-Token'] ?? null) === 'tk', 'header 含 Access-Token: tk');
check(($headers['X-Sdk-Language'] ?? null) === 'php', 'header 含 X-Sdk-Language: php');

// --- 5. 缺必填参数：InvalidArgumentException --------------------------------------
$thrown = null;
try {
    $client->accountFundGetV30Api()->get()->execute();
} catch (InvalidArgumentException $e) {
    $thrown = $e;
}
check($thrown instanceof InvalidArgumentException, '缺必填参数抛 InvalidArgumentException');
check($thrown !== null && $thrown->getMessage() === 'accountIds is required and must be specified', '必填校验消息与 Go 一致');

$thrown = null;
try {
    $client->accountFundGetV30Api()->get()->accountIds([1])->execute();
} catch (InvalidArgumentException $e) {
    $thrown = $e;
}
check($thrown instanceof InvalidArgumentException && $thrown->getMessage() === 'accountType is required and must be specified', '第二必填参数校验');

// --- 6. 非 2xx：GenericOpenAPIError -----------------------------------------------
$client->getApiClient()->setTransport(static function (array $ctx): array {
    return ['statusCode' => 400, 'headers' => [], 'body' => '{"message":"bad request"}'];
});
$thrown = null;
try {
    $client->accountFundGetV30Api()->get()
        ->accountIds([1])
        ->accountType('AD')
        ->accessToken('tk')
        ->execute();
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check($thrown instanceof GenericOpenAPIError, '非 2xx 抛 GenericOpenAPIError');
check($thrown !== null && $thrown->getStatusCode() === 400, 'GenericOpenAPIError getStatusCode() === 400');
check($thrown !== null && $thrown->getBody() === '{"message":"bad request"}', 'GenericOpenAPIError getBody() 保留原始响应');

// --- 7. buildQuery 数组语义（Go parameterAddToHeaderOrQuery）---------------------
$apiClient = $client->getApiClient();
check(
    $apiClient->buildQuery(['advertiser_ids' => [1, 2]]) === 'advertiser_ids=[1%2C2]',
    'buildQuery 数组 -> json_encode + 字面方括号: ' . $apiClient->buildQuery(['advertiser_ids' => [1, 2]])
);
check($apiClient->buildQuery(['a' => 'x y', 'b' => null]) === 'a=x+y', 'buildQuery 标量 urlencode + null 跳过');

// --- 8. 非法 JSON 响应 -> GenericOpenAPIError -------------------------------------
$client->getApiClient()->setTransport(static function (array $ctx): array {
    return ['statusCode' => 200, 'headers' => [], 'body' => 'not-json{{'];
});
$thrown = null;
try {
    $client->accountFundGetV30Api()->get()
        ->accountIds([1])
        ->accountType('AD')
        ->accessToken('tk')
        ->execute();
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check($thrown instanceof GenericOpenAPIError, '非法 JSON 响应抛 GenericOpenAPIError');
check($thrown !== null && $thrown->getStatusCode() === 200, 'decode 失败保留 statusCode');
check($thrown !== null && str_contains($thrown->getMessage(), 'JSON'), 'decode 失败 message 含 JSON 错误');

// --- 9. CommonApiRequest 非法 path -> InvalidArgumentException ---------------------
$thrown = null;
try {
    $client->commonApi()->get('https://evil.example.com/steal');
} catch (InvalidArgumentException $e) {
    $thrown = $e;
}
check($thrown instanceof InvalidArgumentException, 'commonApi 绝对 URL path 抛 InvalidArgumentException（防 SSRF）');

// --- 10. LogMiddleware 敏感 header 掩码 -------------------------------------------
$logFile = tempnam(sys_get_temp_dir(), 'oelog');
$prevLog = ini_get('error_log');
ini_set('error_log', $logFile);
$mw = new \Oceanengine\Middleware\LogMiddleware();
$handler = $mw(static fn (array $ctx): array => ['statusCode' => 200, 'headers' => [], 'body' => '{}']);
$handler([
    'method' => 'GET',
    'url' => 'https://api.oceanengine.com/x',
    'headers' => ['Access-Token' => 'abcdefghij', 'Authorization' => 'Bearer zzzzzzzz', 'X-Ok' => 'visible'],
    'body' => '',
    'enableLog' => true,
]);
ini_set('error_log', $prevLog);
$logged = (string)file_get_contents($logFile);
@unlink($logFile);
check(str_contains($logged, 'abcd***'), 'LogMiddleware 掩码 Access-Token（前4字符+***）');
check(!str_contains($logged, 'abcdefghij'), 'LogMiddleware 日志不含完整 Access-Token');
check(!str_contains($logged, 'Bearer zzzz'), 'LogMiddleware 日志不含完整 Authorization');
check(str_contains($logged, 'visible'), 'LogMiddleware 普通 header 不打码');

echo sprintf("\n%d checks, %s\n", $checks, $failures === 0 ? 'ALL GREEN' : $failures . ' FAILURE(S)');
exit($failures === 0 ? 0 : 1);
