<?php

declare(strict_types=1);

/**
 * Smoke test for the retry / 429 / QPS rate limiting layer (offline).
 * Run: php ad_open_sdk_php/tests/_retry_smoke.php
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

use Oceanengine\ApiClient;
use Oceanengine\Configuration;
use Oceanengine\GenericOpenAPIError;
use Oceanengine\RateLimiter;
use Oceanengine\RetryPolicy;

/**
 * 断言并计数。
 */
function check(bool $condition, string $label): void
{
    global $failures;
    if ($condition) {
        echo "PASS: {$label}\n";
    } else {
        $failures++;
        echo "FAIL: {$label}\n";
    }
}

$failures = 0;

/**
 * ApiClient with a scripted transport: no network, fully deterministic.
 */
final class ScriptedApiClient extends ApiClient
{
    /** @var array<int, array{method: string, url: string, headers: array, body: ?string}> */
    public array $seen = [];

    /** @var array<int, array> */
    public array $script = [];

    protected function performRequest(string $method, string $url, array $headers, ?string $body, array $files): array
    {
        $this->seen[] = ['method' => $method, 'url' => $url, 'headers' => $headers, 'body' => $body];
        $next = array_shift($this->script);
        if ($next === null) {
            return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'];
        }
        if (($next['transportError'] ?? false) === true) {
            throw new GenericOpenAPIError('Transport error: connection reset', '', null, 0);
        }
        return $next;
    }
}

function newClient(): ScriptedApiClient
{
    return new ScriptedApiClient(Configuration::default());
}

function elapsedMs(float $start): int
{
    return (int)round((microtime(true) - $start) * 1000);
}

// --- 1. 429 + Retry-After: 1 -> one retry, then success ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(10));
$client->script = [
    ['statusCode' => 429, 'headers' => ['Retry-After' => '1'], 'body' => '{"message":"too many requests"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$start = microtime(true);
$result = $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
$elapsed = elapsedMs($start);
check(count($client->seen) === 2, '429 + Retry-After: 1 -> 重试 1 次');
check($result['statusCode'] === 200, '429 重试后返回 200');
check($elapsed >= 1000, "遵循 Retry-After 等待 1 秒（实际 {$elapsed}ms）");

// --- 2. 连续 429 超过 maxAttempts -> GenericOpenAPIError(statusCode=429) ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withMaxAttempts(3)->withBaseDelayMs(5)->withUseJitter(false));
$client->script = [
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$thrown = null;
try {
    $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check($thrown instanceof GenericOpenAPIError, '重试耗尽后抛 GenericOpenAPIError');
check($thrown !== null && $thrown->getStatusCode() === 429, '错误 statusCode=429');
check($thrown !== null && $thrown->getBody() === '{"message":"rate limited"}', '错误 body 原样保留');
check(count($client->seen) === 3, '尝试次数 == maxAttempts（实际 ' . count($client->seen) . '）');

// --- 3. POST 默认不重试 ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(5));
$client->script = [
    ['statusCode' => 503, 'headers' => [], 'body' => '{"message":"busy"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$thrown = null;
try {
    $client->call($client->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/x', [], '{"a":1}'));
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check(count($client->seen) === 1, 'POST 默认不重试（实际尝试 ' . count($client->seen) . ' 次）');
check($thrown instanceof GenericOpenAPIError && $thrown->getStatusCode() === 503, 'POST 未重试时直接抛错');

// --- 4. POST + 请求上下文 retryable=true + 明确拒绝(429) -> 重试 ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(5)->withUseJitter(false));
$client->script = [
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$ctx = $client->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/x', [], '{"a":1}');
$ctx['retryable'] = true;
$result = $client->call($ctx);
check(count($client->seen) === 2, 'POST 带 retryable=true 且服务端明确拒绝(429)时重试');
check($result['statusCode'] === 200, 'POST 重试后成功');
check(
    ($client->seen[1]['body'] ?? null) === '{"a":1}',
    '重试重放了同一个请求体'
);

// --- 4b. POST + retryable=true + 结果不明(503) -> 不重放（防重复投放） ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(5)->withUseJitter(false));
$client->script = [
    ['statusCode' => 503, 'headers' => [], 'body' => '{"message":"busy"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$ctx = $client->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/x', [], '{"a":1}');
$ctx['retryable'] = true;
$thrown = null;
try {
    $client->call($ctx);
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check(count($client->seen) === 1, '结果不明(503)时不会因 retryable=true 重放 POST');
check($thrown instanceof GenericOpenAPIError && $thrown->getStatusCode() === 503, '结果不明时直接抛 503');

// --- 4c. 显式声明 POST 可重放后，503 也会重试 ---
$client = newClient();
$client->setRetryPolicy(
    RetryPolicy::default()->withBaseDelayMs(5)->withUseJitter(false)->withRetryableMethods(['GET', 'POST'])
);
$client->script = [
    ['statusCode' => 503, 'headers' => [], 'body' => '{"message":"busy"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$result = $client->call($client->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/x', [], '{"a":1}'));
check(count($client->seen) === 2, '显式把 POST 列入 retryableMethods 后 503 也会重试');
check($result['statusCode'] === 200, '显式声明可重放后重试成功');

// --- 5. 502 幂等 GET -> 重试后成功 ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(5)->withUseJitter(false));
$client->script = [
    ['statusCode' => 502, 'headers' => [], 'body' => '{"message":"bad gateway"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$result = $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
check(count($client->seen) === 2, '502 幂等 GET 重试后成功');
check($result['statusCode'] === 200, '502 重试后返回 200');

// --- 6. 传输层错误（statusCode=0）可重试 ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(5)->withUseJitter(false));
$client->script = [
    ['transportError' => true],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$result = $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
check(count($client->seen) === 2, '传输层错误重试后成功');
check($result['statusCode'] === 200, '传输层错误重试后返回 200');

// --- 7. 限速器：qps=20 时 3 次 acquire 的量级检查 ---
$limiter = new RateLimiter(20.0);
$start = microtime(true);
$limiter->acquire();
$limiter->acquire();
$limiter->acquire();
$elapsed = elapsedMs($start);
check(
    $elapsed >= 95 && $elapsed < 2000,
    "限速器 qps=20：3 次 acquire 耗时 {$elapsed}ms（期望约 100ms）"
);
check($limiter->getLastWaitMs() > 0, '限速器记录了最近一次等待毫秒数');

// --- 8. 未设置限速器 -> 不产生等待 ---
$client = newClient();
$client->script = [['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}']];
$start = microtime(true);
$client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
$elapsed = elapsedMs($start);
check($elapsed < 50, "未设置限速器时无等待（实际 {$elapsed}ms）");
check($client->getRateLimiter() === null, 'getRateLimiter() 默认为 null');
check((new RateLimiter())->getLastWaitMs() === 0, '不限速的限速器不等待');
check((new RateLimiter(0.0))->getLastWaitMs() === 0, 'qps=0 表示不限速');

// --- 9. 限速器接入 ApiClient ---
$client = newClient();
$limiter = new RateLimiter(50.0);
$client->setRateLimiter($limiter);
check($client->getRateLimiter() === $limiter, 'setRateLimiter/getRateLimiter 往返一致');
$client->script = [['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}']];
$start = microtime(true);
$client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
$client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
$elapsed = elapsedMs($start);
check($elapsed >= 15, "ApiClient 集成限速器后第二次请求被推迟（实际 {$elapsed}ms）");

// --- 10. 策略不可变 ---
$base = RetryPolicy::default();
$derived = $base->withMaxAttempts(7);
check($base->getMaxAttempts() === 3, 'withMaxAttempts 不修改原对象');
check($derived->getMaxAttempts() === 7, 'withMaxAttempts 返回新实例');
check($base !== $derived, 'withMaxAttempts 返回不同实例');
check($base->withBaseDelayMs(1)->getBaseDelayMs() === 1 && $base->getBaseDelayMs() === 200, 'withBaseDelayMs 不修改原对象');
check(RetryPolicy::none()->getMaxAttempts() === 1, 'RetryPolicy::none() 不重试');
check(RetryPolicy::none()->shouldRetry('GET', 429) === false, 'RetryPolicy::none() 拒绝一切重试');
check(RetryPolicy::default()->shouldRetry('GET', 429) === true, '默认策略重试 GET 429');
check(RetryPolicy::default()->shouldRetry('POST', 429) === false, '默认策略不重试 POST 429');
check(RetryPolicy::default()->shouldRetry('GET', 400) === false, '默认策略不重试 400');
check(RetryPolicy::default()->shouldRetry('POST', 429, true) === true, 'forceRetry 覆盖方法限制');
check(RetryPolicy::default()->shouldRetry('GET', 0) === true, '传输层错误（0）可重试');

// --- 11. onRetry 回调 ---
$calls = [];
$policy = RetryPolicy::default()
    ->withBaseDelayMs(5)
    ->withUseJitter(false)
    ->withOnRetry(static function (int $attempt, int $delayMs, array $context) use (&$calls): void {
        $calls[] = ['attempt' => $attempt, 'delayMs' => $delayMs, 'context' => $context];
    });
$client = newClient();
$client->setRetryPolicy($policy);
$client->script = [
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
check(count($calls) === 1, 'onRetry 回调被调用一次');
check(($calls[0]['attempt'] ?? null) === 1, 'onRetry attempt=1');
check(($calls[0]['delayMs'] ?? null) === 5, 'onRetry delayMs=5');
check(($calls[0]['context']['statusCode'] ?? null) === 429, 'onRetry context 含 statusCode');
check(($calls[0]['context']['method'] ?? null) === 'GET', 'onRetry context 含 method');
check(
    str_contains((string)($calls[0]['context']['url'] ?? ''), '/v3.0/x'),
    'onRetry context 含 url'
);
check($client->getRetryPolicy() === $policy, 'setRetryPolicy/getRetryPolicy 往返一致');

// --- 12. Configuration 集成 ---
$cfg = Configuration::default();
check($cfg->retryPolicy === null, 'Configuration::$retryPolicy 默认为 null（使用默认策略）');
check($cfg->rateLimiter === null, 'Configuration::$rateLimiter 默认为 null（不限速）');
check($cfg->timeoutSeconds === 60, 'Configuration::$timeoutSeconds 默认为 60');
$cfg->retryPolicy = RetryPolicy::none();
$client = newClient();
$client->getConfig()->retryPolicy = $cfg->retryPolicy;
$client->script = [
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$thrown = null;
try {
    $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check(count($client->seen) === 1, 'Configuration 中的策略生效（none() 不重试）');
check($thrown instanceof GenericOpenAPIError && $thrown->getStatusCode() === 429, 'none() 策略下直接抛错');

// --- 13. 默认行为向后兼容：未设置任何东西时只重试幂等方法 ---
$client = newClient();
$client->script = [
    ['statusCode' => 429, 'headers' => [], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$result = $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
check(count($client->seen) === 2, '默认配置下 GET 429 会重试');
check($result['statusCode'] === 200, '默认配置下重试成功');
check($client->getRetryPolicy() === null, '未显式设置时 getRetryPolicy() 为 null');

// --- 14. Retry-After 超过等待上限时不重试（不截断后提前重试） ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withMaxRetryAfterSeconds(1));
$client->script = [
    ['statusCode' => 429, 'headers' => ['Retry-After' => '5'], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$start = microtime(true);
$thrown = null;
try {
    $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
$elapsed = elapsedMs($start);
check(count($client->seen) === 1, 'Retry-After 超过等待上限时不重试（不提前撞限流）');
check($thrown instanceof GenericOpenAPIError && $thrown->getStatusCode() === 429, '超过等待上限时直接抛 429');
check($elapsed < 500, "超过等待上限时不等待（实际 {$elapsed}ms）");

$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withMaxRetryAfterSeconds(0));
$client->script = [
    ['statusCode' => 429, 'headers' => ['Retry-After' => '5'], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$start = microtime(true);
$client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
$elapsed = elapsedMs($start);
check($elapsed < 500, "maxRetryAfterSeconds=0 时不等 Retry-After（实际 {$elapsed}ms）");

// --- 15. Retry-After 支持 HTTP-date 形式 ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default());
$client->script = [
    ['statusCode' => 503, 'headers' => ['Retry-After' => gmdate('D, d M Y H:i:s \G\M\T', time() + 2)], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$start = microtime(true);
$result = $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
$elapsed = elapsedMs($start);
check(count($client->seen) === 2, 'Retry-After 为 HTTP-date 时同样触发重试');
check($result['statusCode'] === 200, 'Retry-After 为 HTTP-date 时重试成功');
check($elapsed >= 900 && $elapsed < 4000, "Retry-After HTTP-date 换算为等待（实际 {$elapsed}ms）");


// --- 16. 传输层错误（结果不明）不重放非幂等请求 -----------------------------
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withMaxAttempts(4)->withBaseDelayMs(5));
$client->script = [
    ['transportError' => true],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$thrown = null;
try {
    $client->call(
        $client->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/ad/create/', [], '{}')
    );
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check(count($client->seen) === 1, '传输层错误不重放非幂等 POST（只发 1 次）');
check($thrown instanceof GenericOpenAPIError && $thrown->getStatusCode() === 0, '传输层错误抛出 statusCode=0 的错误');

// --- 17. 传输层错误仍重试幂等 GET -----------------------------------------
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withMaxAttempts(4)->withBaseDelayMs(5));
$client->script = [
    ['transportError' => true],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$result = $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
check(count($client->seen) === 2, '传输层错误会重试幂等 GET（发 2 次）');
check($result['statusCode'] === 200, '传输层错误重试后成功');

// --- 18. Retry-After 超过上限时不重试（宁可失败也不提前重试） ---------------
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withMaxAttempts(4)->withBaseDelayMs(5));
$client->script = [
    ['statusCode' => 429, 'headers' => ['Retry-After' => '120'], 'body' => '{"message":"rate limited"}'],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$start = microtime(true);
$thrown = null;
try {
    $client->call($client->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
$elapsed = elapsedMs($start);
check(count($client->seen) === 1, 'Retry-After 超过 maxRetryAfterSeconds 时不重试');
check($thrown instanceof GenericOpenAPIError && $thrown->getStatusCode() === 429, '超过上限的 Retry-After 直接抛出 429');
check($elapsed < 500, "超过上限时不等待（实际 {$elapsed}ms）");

// --- 19. Retry-After 分支只往后抖动，绝不提前 -----------------------------
$policy = RetryPolicy::default()->withUseJitter(true);
$delays = [];
for ($i = 0; $i < 20; $i++) {
    $delays[] = $policy->computeDelayMs(1, 2);
}
check(min($delays) >= 2000, 'Retry-After 等待不会早于服务端指定的时间');
check(max($delays) > min($delays), 'Retry-After 分支带抖动（多次取值不完全相同）');


// --- 20. 响应数组里 statusCode=0 也按"结果不明"处理（不放行 POST 重放） ---
$client = newClient();
$client->setRetryPolicy(RetryPolicy::default()->withBaseDelayMs(5));
$client->script = [
    ['statusCode' => 0, 'headers' => [], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$ctx = $client->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/x', [], '{"a":1}');
$ctx['retryable'] = true;
$thrown = null;
try {
    $client->call($ctx);
} catch (\Throwable $e) {
    $thrown = $e;
}
check(count($client->seen) === 1, 'statusCode=0 的响应不会重放非幂等 POST');

echo $failures === 0 ? "\nALL GREEN\n" : "\n{$failures} FAILURE(S)\n";
exit($failures === 0 ? 0 : 1);
