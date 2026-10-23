<?php

declare(strict_types=1);

namespace Oceanengine\Middleware;

/**
 * Logs request/response summaries via error_log when the request context
 * carries 'enableLog' => true. Sensitive headers (Access-Token,
 * Authorization) are masked before printing.
 */
class LogMiddleware implements MiddlewareInterface
{
    /** Headers whose values are masked in logs (case-insensitive). */
    private const SENSITIVE_HEADERS = ['access-token', 'authorization'];

    /**
     * @param callable $next
     * @return callable
     */
    public function __invoke(callable $next): callable
    {
        return static function (array $requestContext) use ($next): array {
            $enableLog = (bool)($requestContext['enableLog'] ?? false);
            if ($enableLog) {
                error_log(sprintf(
                    '[Oceanengine SDK] request: %s %s headers=%s body=%s',
                    (string)($requestContext['method'] ?? ''),
                    (string)($requestContext['url'] ?? ''),
                    json_encode(self::maskHeaders($requestContext['headers'] ?? []), JSON_UNESCAPED_UNICODE),
                    (string)($requestContext['body'] ?? '')
                ));
            }

            $response = $next($requestContext);

            if ($enableLog) {
                error_log(sprintf(
                    '[Oceanengine SDK] response: status=%d body=%s',
                    (int)($response['statusCode'] ?? 0),
                    (string)($response['body'] ?? '')
                ));
            }

            return $response;
        };
    }

    /**
     * Masks sensitive header values, keeping the first 4 characters.
     *
     * @param array $headers
     * @return array
     */
    private static function maskHeaders(array $headers): array
    {
        foreach ($headers as $name => $value) {
            if (in_array(strtolower((string)$name), self::SENSITIVE_HEADERS, true)) {
                $headers[$name] = substr((string)$value, 0, 4) . '***';
            }
        }
        return $headers;
    }
}
