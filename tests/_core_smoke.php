<?php

declare(strict_types=1);

/**
 * Temporary core smoke test for the hand-written T1 layer (no composer needed).
 * Run: php ad_open_sdk_php/tests/_core_smoke.php
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
use Oceanengine\Client;
use Oceanengine\Configuration;
use Oceanengine\GenericOpenAPIError;
use Oceanengine\Version;

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

// --- Configuration defaults ---
$cfg = Configuration::default();
check($cfg->getBasePath() === 'https://api.oceanengine.com', 'Configuration::default() base path');
check($cfg->userAgent === 'Bytedance Ads Openapi SDK', 'Configuration::default() user agent');
check($cfg->useLogMw === true, 'Configuration::default() useLogMw=true');
$cfg->addDefaultHeader('X-Custom', 'yes');
check($cfg->defaultHeader['X-Custom'] === 'yes', 'Configuration::addDefaultHeader');
// The remaining checks use absolute example.test URLs, so cross-host requests
// are explicitly enabled for this client only.
$cfg->allowCrossHostRequests = true;

// --- buildQuery ---
$api = new ApiClient($cfg);
$api->addMiddleware(new \Oceanengine\Middleware\AuthMiddleware());
$api->addMiddleware(new \Oceanengine\Middleware\HeaderMiddleware($cfg));
$q = $api->buildQuery(['a' => '1 2', 'b' => ['x', 'y'], 'c' => null, 'd' => 5]);
check($q === 'a=1+2&b=[%22x%22%2C%22y%22]&d=5', 'buildQuery Go semantics: array -> json with literal brackets, null skipped: ' . $q);

// --- Fake transport capture ---
$captured = null;
$api->setTransport(static function (array $ctx) use (&$captured): array {
    $captured = $ctx;
    return ['statusCode' => 200, 'headers' => ['X-Test' => 'ok'], 'body' => '{"code":0,"data":{"id":7}}'];
});

$respModel = new class {
    public static ?array $last = null;

    public static function fromArray(array $data)
    {
        self::$last = $data;
        return (object)['decoded' => $data];
    }
};

// --- 2xx call with model decoding ---
$ctx = $api->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/test', [], null, []);
$ctx['accessToken'] = 'token-123';
$ctx['enableLog'] = false;
$result = $api->call($ctx, get_class($respModel));

check($result['statusCode'] === 200, 'call 2xx statusCode');
check($result['model'] !== null && $result['model']->decoded['code'] === 0, 'call decodes response model');
check($respModel::$last === ['code' => 0, 'data' => ['id' => 7]], 'fromArray received decoded JSON');

// --- Middleware-injected headers observed by the transport ---
check($captured !== null, 'transport received request context');
$headers = $captured['headers'] ?? [];
check(($headers['Access-Token'] ?? null) === 'token-123', 'AuthMiddleware injects Access-Token');
check(($headers['X-Sdk-Language'] ?? null) === 'php', 'HeaderMiddleware X-Sdk-Language=php');
check(($headers['X-Sdk-Language-Version'] ?? null) === PHP_VERSION, 'HeaderMiddleware X-Sdk-Language-Version=PHP_VERSION');
check(Configuration::SDK_VERSION === Version::VERSION, 'Configuration::SDK_VERSION 跟随 Version::VERSION');
check(($headers['X-Sdk-Version'] ?? null) === Configuration::SDK_VERSION, 'HeaderMiddleware X-Sdk-Version=Configuration::SDK_VERSION');
check(($headers['User-Agent'] ?? null) === 'Bytedance Ads Openapi SDK', 'HeaderMiddleware User-Agent from Configuration');
check(($headers['X-Custom'] ?? null) === 'yes', 'HeaderMiddleware default headers from Configuration');

// --- Empty token not injected ---
$ctx2 = $api->prepareRequest('GET', 'https://example.test/x');
$api->call($ctx2);
check(!isset($captured['headers']['Access-Token']), 'AuthMiddleware skips empty token');

// --- Non-2xx throws GenericOpenAPIError ---
$api->setTransport(static function (array $ctx): array {
    return ['statusCode' => 400, 'headers' => [], 'body' => '{"message":"bad request"}'];
});
$thrown = null;
try {
    $api->call($api->prepareRequest('POST', 'https://example.test/x', [], '{}'));
} catch (GenericOpenAPIError $e) {
    $thrown = $e;
}
check($thrown instanceof GenericOpenAPIError, 'non-2xx throws GenericOpenAPIError');
check($thrown !== null && $thrown->getStatusCode() === 400, 'error statusCode=400');
check($thrown !== null && $thrown->getBody() === '{"message":"bad request"}', 'error body preserved verbatim');
check($thrown !== null && $thrown->getModel() === null, 'error model=null');

// --- Empty body: an empty model is returned (not null) ---
$api->setTransport(static function (array $ctx): array {
    return ['statusCode' => 204, 'headers' => [], 'body' => ''];
});
$result = $api->call($api->prepareRequest('DELETE', 'https://example.test/x'), get_class($respModel));
check($result['model'] !== null && $result['statusCode'] === 204, 'empty body yields an empty model, not null');

// --- Cross-host absolute URL is refused by default ---
$strictApi = new ApiClient(Configuration::default());
$refused = null;
try {
    $strictApi->prepareRequest('GET', 'https://evil.example/x');
} catch (InvalidArgumentException $e) {
    $refused = $e;
}
check($refused instanceof InvalidArgumentException, 'prepareRequest refuses a foreign host by default');
$allowedApi = new ApiClient(Configuration::default());
$allowedApi->getConfig()->allowCrossHostRequests = true;
$okCtx = $allowedApi->prepareRequest('GET', 'https://evil.example/x');
check($okCtx['url'] === 'https://evil.example/x', 'allowCrossHostRequests=true permits a foreign host');

// --- Redirects: credentials are stripped on a cross-host redirect ---
final class ScriptedApiClient extends ApiClient
{
    /** @var array<int, array{method: string, url: string, headers: array}> */
    public array $seen = [];

    /** @var array<int, array> */
    public array $script = [];

    protected function performRequest(string $method, string $url, array $headers, ?string $body, array $files): array
    {
        $this->seen[] = ['method' => $method, 'url' => $url, 'headers' => $headers];
        $next = array_shift($this->script);
        if ($next === null) {
            return ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'];
        }
        return $next;
    }
}

$redirCfg = Configuration::default();
$redirCfg->allowCrossHostRequests = true;
$redir = new ScriptedApiClient($redirCfg);
$redir->script = [
    ['statusCode' => 302, 'headers' => ['Location' => 'https://other.example/target'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$redirCtx = $redir->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x', ['Access-Token' => 'secret-token']);
$redir->call($redirCtx);
check(count($redir->seen) === 2, 'redirect is followed once');
check(
    isset($redir->seen[1]['headers']['Access-Token']) === false,
    'cross-host redirect strips the Access-Token header'
);
check(
    str_contains($redir->seen[1]['url'], 'other.example'),
    'cross-host redirect target is requested'
);

$sameHost = new ScriptedApiClient($redirCfg);
$sameHost->script = [
    ['statusCode' => 302, 'headers' => ['Location' => '/v3.0/next'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$sameHost->call($sameHost->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x', ['Access-Token' => 'secret-token']));
check(
    ($sameHost->seen[1]['headers']['Access-Token'] ?? null) === 'secret-token',
    'same-host redirect keeps the Access-Token header'
);
check(
    $sameHost->seen[1]['url'] === 'https://api.oceanengine.com/v3.0/next',
    'relative Location is resolved against the request URL'
);

$looping = new ScriptedApiClient($redirCfg);
$looping->script = array_fill(0, 8, ['statusCode' => 302, 'headers' => ['Location' => '/again'], 'body' => '']);
$redirectError = null;
try {
    $looping->call($looping->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x'));
} catch (GenericOpenAPIError $e) {
    $redirectError = $e;
}
check($redirectError instanceof GenericOpenAPIError, 'redirect loop is aborted with an error');

// --- Same host with an explicit default port is still the same origin ---
$explicitPort = new ScriptedApiClient($redirCfg);
$explicitPort->script = [
    ['statusCode' => 302, 'headers' => ['Location' => 'https://api.oceanengine.com:443/v3.0/next'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$explicitPort->call($explicitPort->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x', ['Access-Token' => 'secret-token']));
check(
    ($explicitPort->seen[1]['headers']['Access-Token'] ?? null) === 'secret-token',
    'same-host redirect with an explicit :443 keeps the Access-Token'
);

// --- HTTPS -> HTTP downgrade is a different origin: credentials are stripped ---
$downgrade = new ScriptedApiClient($redirCfg);
$downgrade->script = [
    ['statusCode' => 302, 'headers' => ['Location' => 'http://api.oceanengine.com/v3.0/next'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$downgrade->call($downgrade->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x', ['Access-Token' => 'secret-token']));
check(
    isset($downgrade->seen[1]['headers']['Access-Token']) === false,
    'https -> http downgrade strips the Access-Token'
);

// --- POST -> GET rewrite drops the entity headers ---
$postGet = new ScriptedApiClient($redirCfg);
$postGet->script = [
    ['statusCode' => 303, 'headers' => ['Location' => '/v3.0/next'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$postGet->call($postGet->prepareRequest('POST', 'https://api.oceanengine.com/v3.0/x', ['Content-Type' => 'application/json', 'Access-Token' => 'secret-token'], '{"a":1}'));
check($postGet->seen[1]['method'] === 'GET', '303 turns POST into GET');
check(isset($postGet->seen[1]['headers']['Content-Type']) === false, '303 rewrite drops Content-Type');

// --- Protocol-relative Location is resolved as an absolute URL ---
$protoRelative = new ScriptedApiClient($redirCfg);
$protoRelative->script = [
    ['statusCode' => 302, 'headers' => ['Location' => '//other.example/target'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$protoRelative->call($protoRelative->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x', ['Access-Token' => 'secret-token']));
check(
    str_starts_with($protoRelative->seen[1]['url'], 'https://other.example/'),
    'protocol-relative Location resolves to an absolute URL'
);
check(
    isset($protoRelative->seen[1]['headers']['Access-Token']) === false,
    'protocol-relative cross-host redirect strips the Access-Token'
);

// --- Equivalent host spellings are the same origin ---
$spelling = new ScriptedApiClient($redirCfg);
$spelling->script = [
    ['statusCode' => 302, 'headers' => ['Location' => 'https://api.oceanengine.com./v3.0/next'], 'body' => ''],
    ['statusCode' => 200, 'headers' => [], 'body' => '{"code":0}'],
];
$spelling->call($spelling->prepareRequest('GET', 'https://api.oceanengine.com/v3.0/x', ['Access-Token' => 'secret-token']));
check(
    ($spelling->seen[1]['headers']['Access-Token'] ?? null) === 'secret-token',
    'a trailing-dot host is the same origin and keeps the Access-Token'
);

// --- Client::init wires middleware chain ---
$client = Client::init(Configuration::default());
check($client->getApiClient() instanceof ApiClient, 'Client::init returns client with ApiClient');
$captured = null;
$client->getApiClient()->setTransport(static function (array $ctx) use (&$captured): array {
    $captured = $ctx;
    return ['statusCode' => 200, 'headers' => [], 'body' => '{}'];
});
$ctx3 = $client->getApiClient()->prepareRequest('GET', 'https://api.oceanengine.com/y');
$ctx3['accessToken'] = 'abc';
$client->getApiClient()->call($ctx3);
check(($captured['headers']['Access-Token'] ?? null) === 'abc', 'Client::init Auth middleware active');
check(($captured['headers']['X-Sdk-Version'] ?? null) === Configuration::SDK_VERSION, 'Client::init Header middleware active');

echo $failures === 0 ? "\nALL GREEN\n" : "\n{$failures} FAILURE(S)\n";
exit($failures === 0 ? 0 : 1);
