<?php

declare(strict_types=1);

namespace Oceanengine\Middleware;

use Oceanengine\Token\TokenProviderInterface;

/**
 * 从 TokenProviderInterface 取 token 注入 Access-Token 头，
 * 并在业务码判定 token 失效时刷新 token 后重放一次请求。
 *
 * token 不会出现在任何输出或异常消息中。
 */
class TokenMiddleware implements MiddlewareInterface
{
    /** @var TokenProviderInterface */
    private TokenProviderInterface $provider;

    /** @var int[] 视为 token 失效的业务码 */
    private array $invalidTokenCodes;

    /** @var int 失效后最多重放几次 */
    private int $maxRefreshRetries;

    /** @var bool 是否注入 Access-Token 头 */
    private bool $injectHeader;

    /**
     * @param TokenProviderInterface $provider token 来源
     * @param array<int|string> $invalidTokenCodes 视为 token 失效的业务码
     * @param int $maxRefreshRetries 失效后最多重放次数
     * @param bool $injectHeader 是否注入 Access-Token 头
     */
    public function __construct(
        TokenProviderInterface $provider,
        array $invalidTokenCodes = [40103],
        int $maxRefreshRetries = 1,
        bool $injectHeader = true
    ) {
        $this->provider = $provider;
        $this->invalidTokenCodes = array_values(array_map('intval', $invalidTokenCodes));
        $this->maxRefreshRetries = max(0, $maxRefreshRetries);
        $this->injectHeader = $injectHeader;
    }

    /**
     * @param callable $next
     * @return callable
     */
    public function __invoke(callable $next): callable
    {
        return function (array $requestContext) use ($next): array {
            if (!empty($requestContext['skipTokenMiddleware'])) {
                return $next($requestContext);
            }

            $response = $next($this->withToken($requestContext));

            $retries = 0;
            while ($retries < $this->maxRefreshRetries && $this->isInvalidTokenResponse($response)) {
                $retries++;
                $this->provider->invalidate();
                $response = $next($this->withToken($requestContext));
            }

            return $response;
        };
    }

    /**
     * 取 token 并写入请求头。无 token 时不注入。
     *
     * @param array $requestContext
     * @return array
     */
    private function withToken(array $requestContext): array
    {
        if (!$this->injectHeader) {
            return $requestContext;
        }
        $token = $this->provider->getToken();
        if ($token === '') {
            return $requestContext;
        }
        $headers = (array)($requestContext['headers'] ?? []);
        $headers['Access-Token'] = $token;
        $requestContext['headers'] = $headers;
        return $requestContext;
    }

    /**
     * 业务错误码判定。HTTP 200 的响应体里也可能有业务错误码。
     *
     * @param array $response
     * @return bool
     */
    private function isInvalidTokenResponse(array $response): bool
    {
        if ($this->invalidTokenCodes === []) {
            return false;
        }
        // HTTP 401 即鉴权失败，即使响应体为空也应触发刷新重放
        if ((int)($response['statusCode'] ?? 0) === 401) {
            return true;
        }
        $body = (string)($response['body'] ?? '');
        if ($body === '') {
            return false;
        }
        $decoded = json_decode($body, true);
        if (!is_array($decoded) || !isset($decoded['code'])) {
            return false;
        }
        return in_array((int)$decoded['code'], $this->invalidTokenCodes, true);
    }
}
