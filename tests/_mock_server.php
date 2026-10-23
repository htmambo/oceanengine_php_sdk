<?php

declare(strict_types=1);

/**
 * 本地假服务端：给联调脚本（tests/integration.php）提供与真实接口同构的响应。
 *
 * Run: php -S 127.0.0.1:8799 tests/_mock_server.php
 *
 * 响应字段名与 src/Models/ 下的 json tag 保持一致，否则 PHP 侧反序列化拿不到值。
 *
 * 故障注入（可选，仅用于验证脚本的失败路径）：
 *   MOCK_FAIL=report      指定端点返回业务错误码 code!=0
 *   MOCK_429=report       指定端点第一次请求返回 HTTP 429，之后恢复正常
 *   端点 key：token / access_token / advertiser / advertiser_info / promotion / report / fund
 */

$path = (string)(parse_url((string)($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH) ?? '/');

/** 各端点的固定响应；key 为路由 path */
$routes = [
    '/open_api/oauth2/app_access_token/' => [
        'key' => 'token',
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-1',
            'data' => [
                'access_token' => 'mock_access_token_123456',
                'expires_in' => 86400,
            ],
        ],
    ],
    '/open_api/oauth2/access_token/' => [
        'key' => 'access_token',
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-1b',
            'data' => [
                'access_token' => 'mock_advertiser_token_654321',
                'advertiser_ids' => [999888777],
                'expires_in' => 86400,
                'refresh_token' => 'mock_refresh_token_abc',
                'refresh_token_expires_in' => 604800,
            ],
        ],
    ],
    '/open_api/oauth2/advertiser/get/' => [
        'key' => 'advertiser',
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-2',
            'data' => [
                'list' => [
                    [
                        'advertiser_id' => 999888777,
                        'advertiser_name' => 'mock-advertiser',
                        'account_id' => 999888777,
                        'account_name' => 'mock-advertiser',
                        'account_type' => 'ADVERTISER',
                    ],
                ],
            ],
        ],
    ],
    '/open_api/2/advertiser/info/' => [
        'key' => 'advertiser_info',
        // AdvertiserInfoV2Response 的 data 是数组（AdvertiserInfoV2ResponseData[]）
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-3',
            'data' => [
                [
                    'id' => 999888777,
                    'name' => 'mock-advertiser',
                    'status' => 'STATUS_ENABLE',
                ],
            ],
        ],
    ],
    '/open_api/v3.0/promotion/list/' => [
        'key' => 'promotion',
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-4',
            'data' => [
                'list' => [],
                'page_info' => [
                    'page' => 1,
                    'page_size' => 10,
                    'total_number' => 0,
                    'total_page' => 0,
                ],
            ],
        ],
    ],
    '/open_api/2/report/ad/get/' => [
        'key' => 'report',
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-5',
            'data' => [
                'list' => [],
                'page_info' => [
                    'page' => 1,
                    'page_size' => 20,
                    'total_number' => 0,
                    'total_page' => 0,
                ],
            ],
        ],
    ],
    '/open_api/v3.0/account/fund/get/' => [
        'key' => 'fund',
        'payload' => [
            'code' => 0,
            'message' => 'OK',
            'request_id' => 'mock-req-6',
            'data' => [
                'list' => [
                    [
                        'account_id' => 123456789,
                        'balance' => 12345,
                    ],
                ],
            ],
        ],
    ],
];

/**
 * 读取逗号分隔的环境变量，返回 key 列表。
 */
function mockKeys(string $name): array
{
    $raw = getenv($name);
    if ($raw === false || trim($raw) === '') {
        return [];
    }
    $keys = [];
    foreach (explode(',', $raw) as $item) {
        $item = trim($item);
        if ($item !== '') {
            $keys[] = $item;
        }
    }
    return $keys;
}

header('Content-Type: application/json; charset=utf-8');

if (!isset($routes[$path])) {
    // 未知路径：HTTP 200 + 业务错误码，模拟开放平台的统一错误响应
    echo json_encode([
        'code' => 404,
        'message' => 'mock: unknown path',
        'request_id' => 'mock-req-x',
    ], JSON_UNESCAPED_UNICODE);
    return;
}

$route = $routes[$path];
$endpointKey = (string)$route['key'];

// --- 故障注入：第一次请求返回 HTTP 429，之后恢复正常 --------------------------------
if (in_array($endpointKey, mockKeys('MOCK_429'), true)) {
    // 状态文件按服务端进程隔离：重启 mock 即重新触发，便于重复演练
    $stateFile = sys_get_temp_dir() . '/oceanengine_mock_429_' . getmypid() . '_' . $endpointKey;
    $seen = is_file($stateFile) ? (int)file_get_contents($stateFile) : 0;
    if ($seen === 0) {
        file_put_contents($stateFile, '1');
        http_response_code(429);
        echo json_encode([
            'code' => 429,
            'message' => 'mock: too many requests',
            'request_id' => 'mock-req-429',
        ], JSON_UNESCAPED_UNICODE);
        return;
    }
}

// --- 故障注入：返回业务错误码 -----------------------------------------------------
if (in_array($endpointKey, mockKeys('MOCK_FAIL'), true)) {
    echo json_encode([
        'code' => 40001,
        'message' => 'mock: injected business error',
        'request_id' => 'mock-req-err',
        'data' => null,
    ], JSON_UNESCAPED_UNICODE);
    return;
}

echo json_encode($route['payload'], JSON_UNESCAPED_UNICODE);
