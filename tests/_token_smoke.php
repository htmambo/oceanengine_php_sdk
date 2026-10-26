<?php

declare(strict_types=1);

/**
 * token 生命周期冒烟测试（离线，不需要网络与真实凭证）。
 * Run: php ad_open_sdk_php/tests/_token_smoke.php
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
use Oceanengine\Middleware\TokenMiddleware;
use Oceanengine\Token\CachingTokenProvider;
use Oceanengine\Token\InMemoryTokenStore;
use Oceanengine\Token\OAuthTokenProvider;
use Oceanengine\Token\StaticTokenProvider;
use Oceanengine\Token\TokenProviderInterface;

$failures = 0;

function check(bool $cond, string $label): void
{
    global $failures;
    if ($cond) {
        echo "PASS: {$label}\n";
    } else {
        $failures++;
        echo "FAIL: {$label}\n";
    }
}

/** 计数用的 delegate：每次 getToken 依次返回预设的 token。 */
final class CountingTokenProvider implements TokenProviderInterface
{
    public int $calls = 0;
    public int $invalidations = 0;

    /** @var string[] */
    private array $tokens;

    public function __construct(string ...$tokens)
    {
        $this->tokens = $tokens;
    }

    public function getToken(): string
    {
        $this->calls++;
        $index = min($this->calls - 1, count($this->tokens) - 1);
        return $this->tokens[$index] ?? '';
    }

    public function invalidate(?string $token = null): void
    {
        $this->invalidations++;
    }
}

/** 脚本化的 ApiClient：覆写 performRequest 返回固定 JSON。 */
final class TokenScriptedApiClient extends ApiClient
{
    /** @var array<int, array{statusCode:int, headers:array, body:string}> */
    public array $script = [];

    /** @var array<int, array{method:string, url:string, headers:array, body:?string}> */
    public array $seen = [];

    protected function performRequest(string $method, string $url, array $headers, ?string $body, array $files): array
    {
        $this->seen[] = ['method' => $method, 'url' => $url, 'headers' => $headers, 'body' => $body];
        $next = array_shift($this->script);
        if ($next === null) {
            return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'];
        }
        return $next;
    }
}

// --- 1. StaticTokenProvider ---
$static = new StaticTokenProvider('fixed-token');
check($static->getToken() === 'fixed-token', 'StaticTokenProvider 返回固定 token');
$static->invalidate();
check($static->getToken() === 'fixed-token', 'StaticTokenProvider invalidate 后仍返回固定 token');
$staticCallback = new StaticTokenProvider('fixed-token', static function (?string $token): void {
    static $called = false;
    $called = true;
});
$staticCallback->invalidate('fixed-token');
check($staticCallback->getToken() === 'fixed-token', 'StaticTokenProvider 失效回调不改变 token');

// --- 2. CachingTokenProvider 命中缓存 ---
$store = new InMemoryTokenStore();
$delegate = new CountingTokenProvider('delegate-token-1');
$cache = new CachingTokenProvider($delegate, $store, 'default', 60);
check($cache->getToken() === 'delegate-token-1', 'CachingTokenProvider 首次从 delegate 取 token');
check($delegate->calls === 1, '首次取 token 调用 delegate 一次');
check($cache->getToken() === 'delegate-token-1', 'CachingTokenProvider 第二次返回缓存 token');
check($delegate->calls === 1, '命中缓存不再调用 delegate');
$record = $store->get('default');
check($record !== null && $record['token'] === 'delegate-token-1', 'token 已写入 store');
check(
    $record !== null && ($record['expires_at'] - time()) > 0,
    'store 记录带 expires_at'
);

// --- 3. 缓存过期后重新取 ---
$store->set('default', ['token' => 'delegate-token-1', 'expires_at' => time() - 10]);
check($cache->getToken() === 'delegate-token-1', '缓存过期后重新向 delegate 取 token');
check($delegate->calls === 2, '缓存过期后 delegate 被再次调用');

// 剩余有效期小于刷新阈值时同样视为过期
$store->set('default', ['token' => 'delegate-token-1', 'expires_at' => time() + 10]);
check($cache->getToken() === 'delegate-token-1', '进入刷新阈值的 token 触发刷新');
check($delegate->calls === 3, '进入刷新阈值时 delegate 被再次调用');

// --- 4. invalidate 后重新取 ---
$cache->invalidate();
check($store->get('default') === null, 'invalidate 后 store 记录被删除');
check($cache->getToken() === 'delegate-token-1', 'invalidate 后重新向 delegate 取 token');
check($delegate->calls === 4, 'invalidate 后 delegate 被再次调用');
check($delegate->invalidations === 1, 'invalidate 透传给 delegate');

// --- 5. TokenMiddleware 注入 Access-Token 头 ---
$injected = [];
$staticMiddleware = new TokenMiddleware(new StaticTokenProvider('middleware-token'));
$handler = $staticMiddleware(static function (array $ctx) use (&$injected): array {
    $injected[] = $ctx['headers'] ?? [];
    return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0,"data":{}}'];
});
$response = $handler(['method' => 'GET', 'url' => 'https://api.oceanengine.com/v3.0/x', 'headers' => [], 'body' => null]);
check(($injected[0]['Access-Token'] ?? null) === 'middleware-token', 'TokenMiddleware 注入 Access-Token 头');
check((int)$response['statusCode'] === 200, 'TokenMiddleware 透传响应');

// --- 6. 业务码 40103 触发失效刷新并重放一次 ---
$replayCalls = 0;
$replayHeaders = [];
$replayDelegate = new CountingTokenProvider('token-1', 'token-2');
$replayMiddleware = new TokenMiddleware($replayDelegate, [40103], 1);
$replayHandler = $replayMiddleware(static function (array $ctx) use (&$replayCalls, &$replayHeaders): array {
    $replayCalls++;
    $replayHeaders[] = $ctx['headers'] ?? [];
    if ($replayCalls === 1) {
        return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":40103,"message":"access token invalid"}'];
    }
    return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0,"data":{"id":1}}'];
});
$replayResponse = $replayHandler(['method' => 'GET', 'url' => 'https://api.oceanengine.com/v3.0/x', 'headers' => [], 'body' => null]);
check($replayCalls === 2, '40103 触发一次重放');
check($replayDelegate->invalidations === 1, '40103 触发 provider invalidate');
check(($replayHeaders[0]['Access-Token'] ?? null) === 'token-1', '首次请求带旧 token');
check(($replayHeaders[1]['Access-Token'] ?? null) === 'token-2', '重放请求带新 token');
check(str_contains((string)$replayResponse['body'], '"code":0'), '重放成功时返回第二次响应');

// --- 7. 其它业务码不重放 ---
$otherCalls = 0;
$otherDelegate = new CountingTokenProvider('token-1', 'token-2');
$otherMiddleware = new TokenMiddleware($otherDelegate, [40103], 1);
$otherHandler = $otherMiddleware(static function (array $ctx) use (&$otherCalls): array {
    $otherCalls++;
    return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":40002,"message":"param invalid"}'];
});
$otherResponse = $otherHandler(['method' => 'GET', 'url' => 'https://api.oceanengine.com/v3.0/x', 'headers' => [], 'body' => null]);
check($otherCalls === 1, '非失效业务码不重放');
check($otherDelegate->invalidations === 0, '非失效业务码不触发 invalidate');
check(str_contains((string)$otherResponse['body'], '40002'), '非失效业务码原样返回响应');

// --- 8. skipTokenMiddleware 上下文 ---
$skipCalls = 0;
$skipHeaders = [];
$skipDelegate = new CountingTokenProvider('token-1', 'token-2');
$skipMiddleware = new TokenMiddleware($skipDelegate, [40103], 1);
$skipHandler = $skipMiddleware(static function (array $ctx) use (&$skipCalls, &$skipHeaders): array {
    $skipCalls++;
    $skipHeaders[] = $ctx['headers'] ?? [];
    return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":40103}'];
});
$skipHandler([
    'method' => 'GET',
    'url' => 'https://api.oceanengine.com/v3.0/x',
    'headers' => [],
    'body' => null,
    'skipTokenMiddleware' => true,
]);
check($skipCalls === 1, 'skipTokenMiddleware 不重放');
check(!isset($skipHeaders[0]['Access-Token']), 'skipTokenMiddleware 不注入 Access-Token');
check($skipDelegate->calls === 0, 'skipTokenMiddleware 不向 provider 取 token');

// --- 9. OAuthTokenProvider：app_access_token 写入 store ---
$appClient = new TokenScriptedApiClient(Configuration::default());
$appClient->script = [[
    'statusCode' => 200,
    'headers' => [],
    'body' => (string)json_encode([
        'code' => 0,
        'message' => 'ok',
        'request_id' => 'req-app-1',
        'data' => ['access_token' => 'app-token-1', 'expires_in' => 3600],
    ]),
]];
$appStore = new InMemoryTokenStore();
$appProvider = new OAuthTokenProvider(
    $appClient,
    OAuthTokenProvider::MODE_APP_ACCESS_TOKEN,
    ['app_id' => 123456, 'secret' => 'app-secret'],
    $appStore,
    'default'
);
check($appProvider->getToken() === 'app-token-1', 'app_access_token 模式取到 token');
$appRecord = $appStore->get('default');
check($appRecord !== null && $appRecord['token'] === 'app-token-1', 'app_access_token 写入 store');
check(
    $appRecord !== null && abs(($appRecord['expires_at'] - (time() + 3600))) <= 2,
    'store 记录的 expires_at 按 expires_in 计算'
);
$appBody = json_decode((string)($appClient->seen[0]['body'] ?? ''), true);
check(is_array($appBody) && ($appBody['app_id'] ?? null) === 123456, '请求体带 app_id');
check(is_array($appBody) && ($appBody['secret'] ?? null) === 'app-secret', '请求体带 secret');
check($appProvider->getToken() === 'app-token-1', '再次取 token 命中 store');
check(count($appClient->seen) === 1, '命中 store 时不重复请求');

// --- 9b. OAuthTokenProvider：renew_token 轮换 refresh_token ---
$renewClient = new TokenScriptedApiClient(Configuration::default());
$renewClient->script = [[
    'statusCode' => 200,
    'headers' => [],
    'body' => (string)json_encode([
        'code' => 0,
        'message' => 'ok',
        'request_id' => 'req-renew-1',
        'data' => [
            'access_token' => 'renewed-access',
            'expires_in' => 3600,
            'refresh_token' => 'refresh-rotated',
            'refresh_token_expires_in' => 86400,
        ],
    ]),
]];
$renewStore = new InMemoryTokenStore();
$renewProvider = new OAuthTokenProvider(
    $renewClient,
    OAuthTokenProvider::MODE_RENEW_TOKEN,
    ['app_id' => 123456, 'secret' => 'app-secret', 'refresh_token' => 'refresh-original'],
    $renewStore,
    'default'
);
check($renewProvider->getToken() === 'renewed-access', 'renew_token 模式取到新 access token');
$renewBody = json_decode((string)($renewClient->seen[0]['body'] ?? ''), true);
check(
    is_array($renewBody) && ($renewBody['refresh_token'] ?? null) === 'refresh-original',
    '续期请求使用初始 refresh_token'
);
$renewRecord = $renewStore->get('default');
check(
    $renewRecord !== null && ($renewRecord['refresh_token'] ?? null) === 'refresh-rotated',
    'refresh_token 轮换后写入 store'
);
check(
    $renewRecord !== null && ($renewRecord['token'] ?? null) === 'renewed-access',
    'renew_token 模式写入新的 access token'
);

// access token 过期后，用轮换后的 refresh_token 续期
$renewStore->set('default', [
    'token' => 'renewed-access',
    'expires_at' => time() - 1,
    'refresh_token' => 'refresh-rotated',
    'refresh_expires_at' => time() + 86400,
]);
$renewClient->script[] = [
    'statusCode' => 200,
    'headers' => [],
    'body' => (string)json_encode([
        'code' => 0,
        'message' => 'ok',
        'request_id' => 'req-renew-2',
        'data' => [
            'access_token' => 'renewed-access-2',
            'expires_in' => 3600,
            'refresh_token' => 'refresh-rotated-2',
            'refresh_token_expires_in' => 86400,
        ],
    ]),
];
check($renewProvider->getToken() === 'renewed-access-2', 'access token 过期后触发续期');
$renewBody2 = json_decode((string)($renewClient->seen[1]['body'] ?? ''), true);
check(
    is_array($renewBody2) && ($renewBody2['refresh_token'] ?? null) === 'refresh-rotated',
    '续期请求使用轮换后的 refresh_token'
);
$renewRecord2 = $renewStore->get('default');
check(
    $renewRecord2 !== null && ($renewRecord2['refresh_token'] ?? null) === 'refresh-rotated-2',
    '二次轮换结果写入 store'
);

// --- 9b2. access_token / refresh_token 模式 ---
$authClient = new TokenScriptedApiClient(Configuration::default());
$authClient->script = [[
    'statusCode' => 200,
    'headers' => [],
    'body' => (string)json_encode([
        'code' => 0,
        'message' => 'ok',
        'request_id' => 'req-auth-1',
        'data' => [
            'access_token' => 'auth-token-1',
            'expires_in' => 3600,
            'advertiser_ids' => [123],
            'refresh_token' => 'auth-refresh-1',
            'refresh_token_expires_in' => 86400,
        ],
    ]),
]];
$authProvider = new OAuthTokenProvider(
    $authClient,
    OAuthTokenProvider::MODE_ACCESS_TOKEN,
    ['app_id' => 123456, 'secret' => 'app-secret', 'auth_code' => 'auth-code-1'],
    new InMemoryTokenStore(),
    'default'
);
check($authProvider->getToken() === 'auth-token-1', 'access_token 模式取到 token');
$authBody = json_decode((string)($authClient->seen[0]['body'] ?? ''), true);
check(is_array($authBody) && ($authBody['auth_code'] ?? null) === 'auth-code-1', 'access_token 请求带 auth_code');

$refreshClient = new TokenScriptedApiClient(Configuration::default());
$refreshClient->script = [[
    'statusCode' => 200,
    'headers' => [],
    'body' => (string)json_encode([
        'code' => 0,
        'message' => 'ok',
        'request_id' => 'req-refresh-1',
        'data' => [
            'access_token' => 'refreshed-access',
            'expires_in' => 3600,
            'refresh_token' => 'refreshed-refresh',
            'refresh_token_expires_in' => 86400,
        ],
    ]),
]];
$refreshProvider = new OAuthTokenProvider(
    $refreshClient,
    OAuthTokenProvider::MODE_REFRESH_TOKEN,
    ['app_id' => 123456, 'secret' => 'app-secret', 'refresh_token' => 'refresh-original'],
    new InMemoryTokenStore(),
    'default'
);
check($refreshProvider->getToken() === 'refreshed-access', 'refresh_token 模式取到 token');
$refreshBody = json_decode((string)($refreshClient->seen[0]['body'] ?? ''), true);
check(
    is_array($refreshBody) && ($refreshBody['refresh_token'] ?? null) === 'refresh-original',
    'refresh_token 请求带 refresh_token'
);

// 缺少凭证时给出明确异常
$missingThrown = null;
try {
    (new OAuthTokenProvider(
        new TokenScriptedApiClient(Configuration::default()),
        OAuthTokenProvider::MODE_ACCESS_TOKEN,
        ['app_id' => 123456, 'secret' => 'app-secret'],
        null,
        'default'
    ))->getToken();
} catch (\Throwable $e) {
    $missingThrown = $e;
}
check(
    $missingThrown instanceof \InvalidArgumentException
        && str_contains($missingThrown->getMessage(), 'auth_code'),
    '缺少 auth_code 时抛出明确异常'
);

// --- 9c. 业务失败时抛出可读异常，且不泄露 token ---
$errClient = new TokenScriptedApiClient(Configuration::default());
$errClient->script = [[
    'statusCode' => 200,
    'headers' => [],
    'body' => (string)json_encode([
        'code' => 40002,
        'message' => 'invalid app id',
        'request_id' => 'req-err-1',
        'data' => ['access_token' => 'should-not-be-used'],
    ]),
]];
$errProvider = new OAuthTokenProvider(
    $errClient,
    OAuthTokenProvider::MODE_APP_ACCESS_TOKEN,
    ['app_id' => 123456, 'secret' => 'app-secret'],
    new InMemoryTokenStore(),
    'default'
);
$errThrown = null;
try {
    $errProvider->getToken();
} catch (\Throwable $e) {
    $errThrown = $e;
}
check($errThrown instanceof \RuntimeException, '业务错误码抛出异常');
check(
    $errThrown !== null && str_contains($errThrown->getMessage(), '40002')
        && str_contains($errThrown->getMessage(), 'req-err-1'),
    '异常消息带 code 与 request_id'
);
check(
    $errThrown !== null && !str_contains($errThrown->getMessage(), 'should-not-be-used'),
    '异常消息不含 token'
);


// --- 20. 共享存储下的刷新是单飞的：后到的 worker 复用先到者的 token ---
$store = new \Oceanengine\Token\InMemoryTokenStore();
$api = new TokenScriptedApiClient(new \Oceanengine\Configuration());
$api->script = [
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0,"data":{"access_token":"tok-A","expires_in":3600}}'],
];
$provider = new \Oceanengine\Token\OAuthTokenProvider(
    $api,
    'app_access_token',
    ['app_id' => 1, 'secret' => 's'],
    $store,
    'default',
    60
);
$first = $provider->getToken();
check($first === 'tok-A', '首次调用取到 token');
$second = $provider->getToken();
check($second === 'tok-A', '再次调用命中缓存');
check(count($api->seen) === 1, '缓存命中时不会重复调用上游（单飞）');

// --- 21. 存储里已有他人刷新的 token 时直接复用，不再打上游 ---
$store2 = new \Oceanengine\Token\InMemoryTokenStore();
$store2->set('default', ['token' => 'tok-B', 'expires_at' => time() + 3600]);
$api2 = new TokenScriptedApiClient(new \Oceanengine\Configuration());
$provider2 = new \Oceanengine\Token\OAuthTokenProvider(
    $api2,
    'app_access_token',
    ['app_id' => 1, 'secret' => 's'],
    $store2,
    'default',
    60
);
check($provider2->getToken() === 'tok-B', '存储中的有效 token 被直接复用');
check(count($api2->seen) === 0, '复用他人 token 时不调用上游');

// --- 22. InMemoryTokenStore 的锁可获取与释放 ---
$store3 = new \Oceanengine\Token\InMemoryTokenStore();
check($store3->acquire('k1') === true, '首次加锁成功');
check($store3->acquire('k1') === true, '同进程重入加锁成功（不自锁）');
$store3->release('k1');
check($store3->acquire('k2') === true, '释放后可再次加锁');

// --- 23. HTTP 401 也会触发刷新重放 ---
$mwApi = new TokenScriptedApiClient(new \Oceanengine\Configuration());
$calls = 0;
$mwProvider = new \Oceanengine\Token\StaticTokenProvider('tok-401');
$middleware = new \Oceanengine\Middleware\TokenMiddleware($mwProvider);
$chain = $middleware(static function (array $ctx) use (&$calls): array {
    $calls++;
    // 第一次返回 HTTP 401（鉴权失败），第二次返回成功
    if ($calls === 1) {
        return ['statusCode' => 401, 'headers' => [], 'body' => ''];
    }
    return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'];
});
$response = $chain(['method' => 'GET', 'url' => 'https://api.oceanengine.com/x', 'headers' => [], 'body' => null]);
check($calls === 2, 'HTTP 401 触发刷新并重放一次');
check(is_array($response) && ($response['statusCode'] ?? 0) === 200, 'HTTP 401 重放后返回 200');


// --- 24. 等锁超时抛异常，且不释放他人的锁 ---------------------------------
final class AlwaysLockedStore implements \Oceanengine\Token\TokenStoreInterface, \Oceanengine\Token\TokenLockInterface
{
    public int $releaseCalls = 0;

    public function get(string $key): ?array { return null; }
    public function set(string $key, array $value): void {}
    public function delete(string $key): void {}
    public function acquire(string $key, int $ttlSeconds = 10): bool { return false; }
    public function release(string $key): void { $this->releaseCalls++; }
}

$lockedStore = new AlwaysLockedStore();
$lockedApi = new TokenScriptedApiClient(new \Oceanengine\Configuration());
$lockedProvider = new \Oceanengine\Token\OAuthTokenProvider(
    $lockedApi,
    'app_access_token',
    ['app_id' => 1, 'secret' => 's'],
    $lockedStore,
    'default',
    60,
    200   // lockWaitMs：快速超时
);
$lockTimeout = null;
try {
    $lockedProvider->getToken();
} catch (\Throwable $e) {
    $lockTimeout = $e;
}
check(
    $lockTimeout instanceof \Oceanengine\Token\TokenLockTimeoutException,
    '等锁超时抛出 TokenLockTimeoutException'
);
check($lockedStore->releaseCalls === 0, '未持有锁时不会调用 release（不释放他人的锁）');
check(count($lockedApi->seen) === 0, '未持有锁时不会越过锁去刷新');


// --- 25. 刷新成功即落库：并发写入也不能把新轮换的 refresh_token 丢掉 ------
/**
 * 模拟并发：第一次读返回已过期的旧记录，第二次读（我们刷新期间）返回
 * 另一个 worker 写入的、expires_at 更晚且 refresh_token 不同的记录。
 */
final class ConcurrentWriteStore implements \Oceanengine\Token\TokenStoreInterface
{
    public int $reads = 0;

    /** @var array<string, array>|null */
    public ?array $written = null;

    public function get(string $key): ?array
    {
        $this->reads++;
        if ($this->reads === 1) {
            return ['token' => 'old', 'expires_at' => time() - 10, 'refresh_token' => 'rt-old'];
        }
        return ['token' => 'other', 'expires_at' => time() + 7200, 'refresh_token' => 'rt-OTHER'];
    }

    public function set(string $key, array $value): void
    {
        $this->written = $value;
    }

    public function delete(string $key): void
    {
    }
}

$store4 = new ConcurrentWriteStore();
$api4 = new TokenScriptedApiClient(new \Oceanengine\Configuration());
$api4->script = [
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0,"data":{"access_token":"tok-NEW","expires_in":3600,"refresh_token":"rt-NEW","refresh_token_expires_in":604800}}'],
];
$provider4 = new \Oceanengine\Token\OAuthTokenProvider(
    $api4,
    'renew_token',
    ['app_id' => 1, 'secret' => 's', 'refresh_token' => 'rt-old'],
    $store4,
    'default',
    60
);
$provider4->getToken();
check(
    is_array($store4->written) && (string)($store4->written['refresh_token'] ?? '') === 'rt-NEW',
    '刷新成功后新轮换出的 refresh_token 一定落库（并发写入也不会被丢掉）'
);

echo $failures === 0 ? "\nALL GREEN\n" : "\n{$failures} FAILURE(S)\n";
exit($failures === 0 ? 0 : 1);
