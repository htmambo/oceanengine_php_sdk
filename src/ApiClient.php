<?php

declare(strict_types=1);

namespace Oceanengine;

/**
 * Core HTTP layer: builds request contexts, runs the middleware chain,
 * executes the (injectable) transport and decodes responses.
 *
 * Optionally retries transient failures (see RetryPolicy) and throttles the
 * request rate client-side (see RateLimiter), so that batch callers do not
 * have to build their own transport protection.
 */
class ApiClient
{
    /** @var Configuration */
    private Configuration $configuration;

    /** @var array<callable> Middleware factories: fn(callable $next): callable */
    private array $middlewares = [];

    /** @var callable Transport: fn(array $requestContext): array */
    private $transport;

    /** @var RetryPolicy|null 显式设置的重试策略，null 时回落到 Configuration */
    private ?RetryPolicy $retryPolicy = null;

    /** @var RateLimiter|null 显式设置的限速器，null 时回落到 Configuration */
    private ?RateLimiter $rateLimiter = null;

    /**
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->transport = [$this, 'curlTransport'];
    }

    /**
     * @param Configuration $configuration
     * @return self
     */
    public static function create(Configuration $configuration): self
    {
        return new self($configuration);
    }

    /**
     * Registers a middleware. Signature: fn(callable $next): callable,
     * where the returned callable takes the request context array and returns
     * ['statusCode' => int, 'headers' => array, 'body' => string].
     *
     * @param callable $middleware
     * @return void
     */
    public function addMiddleware(callable $middleware): void
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * Injects a custom transport, e.g. for network-free testing.
     *
     * @param callable $transport fn(array $requestContext): array
     * @return void
     */
    public function setTransport(callable $transport): void
    {
        $this->transport = $transport;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->configuration;
    }

    /**
     * Installs a retry policy. Takes precedence over Configuration::$retryPolicy.
     *
     * @param RetryPolicy $policy
     * @return self
     */
    public function setRetryPolicy(RetryPolicy $policy): self
    {
        $this->retryPolicy = $policy;
        return $this;
    }

    /**
     * @return RetryPolicy|null
     */
    public function getRetryPolicy(): ?RetryPolicy
    {
        return $this->retryPolicy;
    }

    /**
     * Installs a client-side rate limiter. Takes precedence over
     * Configuration::$rateLimiter.
     *
     * @param RateLimiter $limiter
     * @return self
     */
    public function setRateLimiter(RateLimiter $limiter): self
    {
        $this->rateLimiter = $limiter;
        return $this;
    }

    /**
     * @return RateLimiter|null
     */
    public function getRateLimiter(): ?RateLimiter
    {
        return $this->rateLimiter;
    }

    /**
     * Builds a request context array. Relative URLs (starting with "/") are
     * prefixed with Configuration::getBasePath() so that ApiClient works
     * standalone, without the Client::init middleware chain.
     *
     * @param string $method HTTP method, e.g. GET / POST
     * @param string $url Full request URL, or a path starting with "/"
     * @param array<string, string> $headers Request headers
     * @param string|null $body Raw request body
     * @param FormFileInfo[] $files Files for multipart uploads
     * @return array{method: string, url: string, headers: array, body: ?string, files: array}
     */
    public function prepareRequest(
        string $method,
        string $url,
        array $headers = [],
        ?string $body = null,
        array $files = []
    ): array {
        if (str_starts_with($url, '/')) {
            $url = $this->configuration->getBasePath() . $url;
        } elseif (!$this->configuration->allowCrossHostRequests
            && !$this->isConfiguredHost($url)
        ) {
            $host = (string)(parse_url($url, PHP_URL_HOST) ?? '');
            throw new \InvalidArgumentException(sprintf(
                'Refusing to send a request to host "%s" (configured host: "%s"). '
                . 'Set Configuration::$allowCrossHostRequests = true to allow it.',
                $host,
                $this->configuration->host
            ));
        }
        return [
            'method' => $method,
            'url' => $url,
            'headers' => $headers,
            'body' => $body,
            'files' => $files,
        ];
    }

    /**
     * Executes the request context through the middleware chain and transport,
     * then decodes the response.
     *
     * Transient failures (429/502/503/504 and transport errors) are retried
     * according to the effective RetryPolicy; the error semantics of the last
     * attempt are preserved unchanged.
     *
     * @param array $requestContext
     * @param class-string|null $responseModelClass Class with a static fromArray(array): mixed method
     * @return array{statusCode: int, headers: array, model: mixed}
     * @throws GenericOpenAPIError on non-2xx responses, transport failures or undecodable JSON bodies
     */
    public function call(array $requestContext, ?string $responseModelClass = null): array
    {
        $response = $this->dispatchWithRetry($requestContext);
        $statusCode = (int)($response['statusCode'] ?? 0);
        $headers = (array)($response['headers'] ?? []);
        $body = (string)($response['body'] ?? '');

        if ($statusCode < 200 || $statusCode > 299) {
            // Best-effort error model backfill: try to decode the error body
            // into the response model, exactly like a success payload.
            $errorModel = null;
            if ($responseModelClass !== null && $body !== '' && method_exists($responseModelClass, 'fromArray')) {
                $decoded = json_decode($body, true);
                if (is_array($decoded)) {
                    try {
                        $errorModel = $responseModelClass::fromArray($decoded);
                    } catch (\Throwable $e) {
                        $errorModel = null;
                    }
                }
            }
            throw new GenericOpenAPIError(
                sprintf('API error: HTTP %d', $statusCode),
                $body,
                $errorModel,
                $statusCode
            );
        }

        $model = null;
        if ($responseModelClass !== null && method_exists($responseModelClass, 'fromArray')) {
            if (trim($body) === '') {
                // 2xx with an empty body: build an empty model instead of
                // handing null back to the generated execute() methods.
                $model = $responseModelClass::fromArray([]);
            } else {
                $decoded = json_decode($body, true);
                if (json_last_error() !== JSON_ERROR_NONE || !is_array($decoded)) {
                    throw new GenericOpenAPIError(
                        sprintf('Failed to decode response JSON: %s', json_last_error_msg()),
                        $body,
                        null,
                        $statusCode
                    );
                }
                $model = $responseModelClass::fromArray($decoded);
            }
        }

        return [
            'statusCode' => $statusCode,
            'headers' => $headers,
            'model' => $model,
        ];
    }

    /**
     * Runs the request, retrying transient failures according to the policy.
     *
     * Every attempt re-enters the middleware chain with the untouched request
     * context, so the body and files are replayed as-is (multipart CURLFile
     * handles are rebuilt by the transport on each attempt).
     *
     * @param array $requestContext
     * @return array{statusCode: int, headers: array, body: string}
     * @throws GenericOpenAPIError when the transport fails and cannot be retried
     */
    private function dispatchWithRetry(array $requestContext): array
    {
        $policy = $this->retryPolicy ?? $this->configuration->retryPolicy ?? RetryPolicy::default();
        $limiter = $this->rateLimiter ?? $this->configuration->rateLimiter;
        $maxAttempts = max(1, $policy->getMaxAttempts());
        $method = strtoupper((string)($requestContext['method'] ?? 'GET'));
        // A single request may opt into retries even for non-idempotent
        // methods, e.g. a POST whose payload is safe to replay.
        $forceRetry = (bool)($requestContext['retryable'] ?? false);

        // Build the onion: middlewares wrap the transport in registration order,
        // so the first registered middleware is the outermost layer.
        $transport = $this->transport;
        $next = static function (array $ctx) use ($transport): array {
            return $transport($ctx);
        };
        foreach (array_reverse($this->middlewares) as $middleware) {
            $next = $middleware($next);
        }

        $attempt = 0;
        while (true) {
            $attempt++;
            if ($limiter !== null) {
                $limiter->acquire();
            }

            try {
                $response = $next($requestContext);
            } catch (GenericOpenAPIError $e) {
                // A transport error (statusCode 0) is transient by nature:
                // a reset connection or a timeout deserves another attempt.
                // 传输层错误的结果不明（服务端可能已处理），只对幂等方法重放；
                // forceRetry 在此不生效，避免重放已成功的 POST 导致重复投放
                if ($e->getStatusCode() === 0
                    && $attempt < $maxAttempts
                    && $policy->shouldRetryTransportError($method)
                ) {
                    $this->waitBeforeRetry($policy, $attempt, null, $method, $requestContext, 0);
                    continue;
                }
                throw $e;
            }

            $statusCode = (int)($response['statusCode'] ?? 0);
            if ($statusCode >= 200 && $statusCode <= 299) {
                return $response;
            }
            $retryAfter = self::parseRetryAfterSeconds((array)($response['headers'] ?? []));
            if ($attempt < $maxAttempts
                && $policy->shouldRetry($method, $statusCode, $forceRetry)
                && ($retryAfter === null || $policy->isRetryAfterAcceptable($retryAfter))
            ) {
                $this->waitBeforeRetry($policy, $attempt, $retryAfter, $method, $requestContext, $statusCode);
                continue;
            }
            return $response;
        }
    }

    /**
     * Notifies the optional retry callback and sleeps before the next attempt.
     *
     * @param RetryPolicy $policy
     * @param int $attempt The attempt that just failed (1-based)
     * @param int|null $retryAfterSeconds
     * @param string $method
     * @param array $requestContext
     * @param int $statusCode
     * @return void
     */
    private function waitBeforeRetry(
        RetryPolicy $policy,
        int $attempt,
        ?int $retryAfterSeconds,
        string $method,
        array $requestContext,
        int $statusCode
    ): void {
        $delayMs = $policy->computeDelayMs($attempt, $retryAfterSeconds);
        $onRetry = $policy->getOnRetry();
        if ($onRetry !== null) {
            $onRetry($attempt, $delayMs, [
                'method' => $method,
                'url' => (string)($requestContext['url'] ?? ''),
                'statusCode' => $statusCode,
            ]);
        }
        if ($delayMs > 0) {
            self::sleepMs($delayMs);
        }
    }

    /**
     * Reads the Retry-After header, which may be a delay in seconds or an
     * HTTP date.
     *
     * @param array<string, string> $headers
     * @return int|null
     */
    private static function parseRetryAfterSeconds(array $headers): ?int
    {
        $value = self::headerValue($headers, 'Retry-After');
        if ($value === null) {
            return null;
        }
        $value = trim($value);
        if ($value === '') {
            return null;
        }
        if (preg_match('/^\d+$/', $value) === 1) {
            return (int)$value;
        }
        $timestamp = strtotime($value);
        if ($timestamp === false) {
            return null;
        }
        $delta = $timestamp - time();
        return $delta > 0 ? $delta : 0;
    }

    /**
     * Sleeps in slices so that signals are handled promptly.
     *
     * @param int $milliseconds
     * @return void
     */
    private static function sleepMs(int $milliseconds): void
    {
        $remaining = $milliseconds * 1000;
        while ($remaining > 0) {
            $slice = $remaining > 500000 ? 500000 : $remaining;
            usleep($slice);
            $remaining -= $slice;
        }
    }

    /**
     * Serializes query parameters, mirroring Go parameterAddToHeaderOrQuery
     * (ad_open_sdk_go/api/client.go): array values are JSON-encoded and sent
     * as a single key with literal square brackets, e.g.
     * account_ids=[1%2C2]; scalars are urlencoded; null values are skipped.
     * Keys are sorted, like Go's url.Values.Encode().
     *
     * @param array<string, mixed> $params
     * @return string
     */
    public function buildQuery(array $params): string
    {
        ksort($params);
        $pairs = [];
        foreach ($params as $key => $value) {
            if ($value === null) {
                continue;
            }
            if (is_array($value)) {
                $encoded = urlencode((string)json_encode($value));
                // keep literal [ ] like Go's url.Values -> query escape round-trip
                $encoded = str_replace(['%5B', '%5D'], ['[', ']'], $encoded);
                $pairs[] = urlencode((string)$key) . '=' . $encoded;
                continue;
            }
            $pairs[] = urlencode((string)$key) . '=' . urlencode((string)$value);
        }
        return implode('&', $pairs);
    }

    /**
     * Default cURL-based transport.
     *
     * Redirects are followed manually (CURLOPT_FOLLOWLOCATION is off) so that
     * credentials are never handed to another host: on a cross-host redirect
     * the Access-Token / Authorization headers are dropped before following.
     *
     * @param array $requestContext
     * @return array{statusCode: int, headers: array, body: string}
     */
    private function curlTransport(array $requestContext): array
    {
        $method = strtoupper((string)($requestContext['method'] ?? 'GET'));
        $url = (string)($requestContext['url'] ?? '');
        $headers = (array)($requestContext['headers'] ?? []);
        $body = $requestContext['body'] ?? null;
        $files = (array)($requestContext['files'] ?? []);

        $credentialOrigin = self::normalizeOrigin($url);
        $maxRedirects = max(0, $this->configuration->maxRedirects);

        for ($hop = 0; ; $hop++) {
            $response = $this->performRequest($method, $url, $headers, $body, $files);

            $statusCode = $response['statusCode'];
            if (!in_array($statusCode, [301, 302, 303, 307, 308], true)) {
                return $response;
            }
            if ($hop >= $maxRedirects) {
                throw new GenericOpenAPIError(
                    sprintf('Too many redirects (limit %d) while requesting %s', $maxRedirects, $url),
                    $response['body'],
                    null,
                    $statusCode
                );
            }

            $location = self::headerValue($response['headers'], 'Location');
            if ($location === null || $location === '') {
                return $response;
            }
            $target = self::resolveRedirectUrl($url, $location);
            $scheme = strtolower((string)parse_url($target, PHP_URL_SCHEME));
            if ($scheme !== 'http' && $scheme !== 'https') {
                throw new GenericOpenAPIError(
                    sprintf('Refusing to follow redirect to unsupported scheme "%s"', $scheme),
                    $response['body'],
                    null,
                    $statusCode
                );
            }

            if (self::normalizeOrigin($target) !== $credentialOrigin) {
                // Different origin (host, port or scheme): never forward
                // credentials to it.
                $headers = self::removeHeader($headers, 'Access-Token');
                $headers = self::removeHeader($headers, 'Authorization');
                $headers = self::removeHeader($headers, 'Proxy-Authorization');
                $headers = self::removeHeader($headers, 'Cookie');
                if (!$this->isConfiguredHost($target) && !$this->configuration->allowCrossHostRequests) {
                    throw new GenericOpenAPIError(
                        sprintf('Refusing to follow cross-host redirect to %s', $target),
                        $response['body'],
                        null,
                        $statusCode
                    );
                }
            }

            // Like Go's http.Client: 301/302/303 turn a POST into a GET and
            // drop the entity headers along with the body.
            if (in_array($statusCode, [301, 302, 303], true) && $method === 'POST') {
                $method = 'GET';
                $body = null;
                $files = [];
                $headers = self::removeHeader($headers, 'Content-Type');
                $headers = self::removeHeader($headers, 'Content-Length');
            }

            $url = $target;
        }
    }

    /**
     * Performs a single HTTP request. Extracted as protected so tests can
     * script responses (redirects, errors) without a network.
     *
     * @param string $method
     * @param string $url
     * @param array<string, string> $headers
     * @param string|null $body
     * @param array $files
     * @return array{statusCode: int, headers: array, body: string}
     */
    protected function performRequest(
        string $method,
        string $url,
        array $headers,
        ?string $body,
        array $files
    ): array {
        $ch = curl_init();
        if ($ch === false) {
            throw new GenericOpenAPIError('Failed to initialise cURL handle', '', null, 0);
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        // Redirects are handled by curlTransport(), not by cURL.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 0);
        $timeout = max(1, $this->configuration->timeoutSeconds);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, min(10, $timeout));
        // Never accept an unverified TLS peer, whatever the platform default is.
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

        // Restrict to HTTP(S).
        if (defined('CURLOPT_PROTOCOLS_STR')) {
            curl_setopt($ch, CURLOPT_PROTOCOLS_STR, 'http,https');
            curl_setopt($ch, CURLOPT_REDIR_PROTOCOLS_STR, 'http,https');
        } else {
            curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
            curl_setopt($ch, CURLOPT_REDIR_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
        }

        $headerLines = [];
        foreach ($headers as $name => $value) {
            $headerLines[] = $name . ': ' . $value;
        }

        if ($files !== []) {
            // Multipart form; cURL builds the boundary automatically.
            $postFields = [];
            if ($body !== null && $body !== '') {
                $decoded = json_decode($body, true);
                if (is_array($decoded)) {
                    foreach ($decoded as $key => $value) {
                        $postFields[$key] = self::stringifyFormValue($value);
                    }
                }
            }
            foreach ($files as $file) {
                if ($file instanceof FormFileInfo) {
                    if (!is_file($file->filePath)) {
                        curl_close($ch);
                        throw new \RuntimeException(sprintf('Multipart file not found: %s', $file->filePath));
                    }
                    $postFields[$file->fieldName] = new \CURLFile(
                        $file->filePath,
                        $file->contentType,
                        basename($file->filePath)
                    );
                }
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        } elseif ($body !== null && $body !== '') {
            if (!isset($headers['Content-Type']) && !isset($headers['content-type'])) {
                $headerLines[] = 'Content-Type: application/json';
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        }

        if ($headerLines !== []) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headerLines);
        }

        $headerBuffer = '';
        curl_setopt($ch, CURLOPT_HEADERFUNCTION, static function ($curl, $line) use (&$headerBuffer): int {
            $headerBuffer .= $line;
            return strlen($line);
        });

        $responseBody = curl_exec($ch);
        if ($responseBody === false) {
            $err = curl_error($ch);
            curl_close($ch);
            throw new GenericOpenAPIError(sprintf('Transport error: %s', $err), '', null, 0);
        }

        $statusCode = (int)curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        return [
            'statusCode' => $statusCode,
            'headers' => self::parseHeaders($headerBuffer),
            'body' => (string)$responseBody,
        ];
    }

    /**
     * Normalises a URL to a comparable origin ("scheme://host:port"), filling
     * in the default port so that "https://h" and "https://h:443" are the
     * same origin. Returns null for a URL without a host.
     *
     * @param string $url
     * @return string|null
     */
    private static function normalizeOrigin(string $url): ?string
    {
        $parts = parse_url($url);
        if ($parts === false || empty($parts['host'])) {
            return null;
        }
        $scheme = strtolower((string)($parts['scheme'] ?? ''));
        $host = self::canonicalizeHost((string)$parts['host']);
        $port = isset($parts['port']) ? (int)$parts['port'] : null;
        if ($port === null) {
            if ($scheme === 'https') {
                $port = 443;
            } elseif ($scheme === 'http') {
                $port = 80;
            }
        }
        return $scheme . '://' . $host . ':' . $port;
    }

    /**
     * Canonicalises a host so that equivalent spellings compare equal:
     * trailing dot removed, IPv6 literals normalised, IDN converted to punycode.
     *
     * @param string $host
     * @return string
     */
    private static function canonicalizeHost(string $host): string
    {
        $host = rtrim(strtolower(trim($host)), '.');
        if ($host === '') {
            return $host;
        }
        // IPv6 literal: normalise the textual form.
        if (str_starts_with($host, '[') && str_ends_with($host, ']')) {
            $packed = @inet_pton(substr($host, 1, -1));
            if ($packed !== false) {
                $unpacked = @inet_ntop($packed);
                if (is_string($unpacked) && $unpacked !== '') {
                    return '[' . strtolower($unpacked) . ']';
                }
            }
            return $host;
        }
        if (function_exists('idn_to_ascii')) {
            try {
                $ascii = @idn_to_ascii($host);
                if (is_string($ascii) && $ascii !== '') {
                    return strtolower($ascii);
                }
            } catch (\Throwable $e) {
                // Not a valid IDN host (or intl without IDNA support): keep it as is.
            }
        }
        return $host;
    }

    /**
     * Whether the given URL points at the configured API host.
     *
     * @param string $url
     * @return bool
     */
    private function isConfiguredHost(string $url): bool
    {
        $target = self::normalizeOrigin($url);
        $configured = self::normalizeOrigin($this->configuration->getBasePath());
        return $target !== null && $configured !== null && $target === $configured;
    }

    /**
     * Resolves a Location header against the URL it was returned from.
     *
     * @param string $baseUrl
     * @param string $location
     * @return string
     */
    private static function resolveRedirectUrl(string $baseUrl, string $location): string
    {
        if (preg_match('#^https?://#i', $location) === 1) {
            return $location;
        }
        $parts = parse_url($baseUrl);
        if ($parts === false || !isset($parts['scheme'], $parts['host'])) {
            return $location;
        }
        $scheme = (string)$parts['scheme'];
        // Protocol-relative URL ("//host/path") keeps the current scheme.
        if (str_starts_with($location, '//')) {
            return $scheme . ':' . $location;
        }
        $origin = $parts['scheme'] . '://' . $parts['host']
            . (isset($parts['port']) ? ':' . $parts['port'] : '');
        if (str_starts_with($location, '/')) {
            return $origin . $location;
        }
        $path = isset($parts['path']) ? $parts['path'] : '/';
        $dir = rtrim(str_replace('\\', '/', dirname($path)), '/');
        return $origin . $dir . '/' . $location;
    }

    /**
     * Case-insensitive header lookup.
     *
     * @param array<string, string> $headers
     * @param string $name
     * @return string|null
     */
    private static function headerValue(array $headers, string $name): ?string
    {
        foreach ($headers as $key => $value) {
            if (strcasecmp((string)$key, $name) === 0) {
                return (string)$value;
            }
        }
        return null;
    }

    /**
     * Removes a header by name, ignoring case.
     *
     * @param array<string, string> $headers
     * @param string $name
     * @return array<string, string>
     */
    private static function removeHeader(array $headers, string $name): array
    {
        foreach (array_keys($headers) as $key) {
            if (strcasecmp((string)$key, $name) === 0) {
                unset($headers[$key]);
            }
        }
        return $headers;
    }

    /**
     * Converts a multipart form value to its string representation, matching
     * Go's json.Marshal-based semantics: bool -> "true"/"false", arrays and
     * other non-scalars -> JSON (Go escapes non-ASCII as \uXXXX, so no
     * JSON_UNESCAPED_UNICODE here).
     *
     * @param mixed $value
     * @return string
     */
    private static function stringifyFormValue($value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }
        if (is_array($value)) {
            return (string)json_encode($value);
        }
        if (is_scalar($value)) {
            return (string)$value;
        }
        return (string)json_encode($value);
    }

    /**
     * @param string $rawHeaderBlock
     * @return array<string, string>
     */
    private static function parseHeaders(string $rawHeaderBlock): array
    {
        $headers = [];
        foreach (preg_split("/\r\n|\n|\r/", $rawHeaderBlock) as $line) {
            $line = trim($line);
            if ($line === '' || stripos($line, 'HTTP/') === 0) {
                continue;
            }
            $pos = strpos($line, ':');
            if ($pos !== false) {
                $headers[trim(substr($line, 0, $pos))] = trim(substr($line, $pos + 1));
            }
        }
        return $headers;
    }
}
