<?php

declare(strict_types=1);

namespace Oceanengine\Middleware;

/**
 * Injects the Access-Token header from the request context 'accessToken' key.
 * Empty tokens are not injected.
 */
class AuthMiddleware implements MiddlewareInterface
{
    /**
     * @param callable $next
     * @return callable
     */
    public function __invoke(callable $next): callable
    {
        return static function (array $requestContext) use ($next): array {
            $token = $requestContext['accessToken'] ?? null;
            if (is_string($token) && $token !== '') {
                $requestContext['headers']['Access-Token'] = $token;
            }
            return $next($requestContext);
        };
    }
}
