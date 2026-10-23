<?php

declare(strict_types=1);

namespace Oceanengine\Middleware;

use Oceanengine\Configuration;

/**
 * Injects SDK identification headers and the User-Agent from Configuration.
 */
class HeaderMiddleware implements MiddlewareInterface
{
    /** @var Configuration */
    private Configuration $configuration;

    /**
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param callable $next
     * @return callable
     */
    public function __invoke(callable $next): callable
    {
        return function (array $requestContext) use ($next): array {
            $headers = $requestContext['headers'] ?? [];
            if (!isset($headers['X-Sdk-Language'])) {
                $headers['X-Sdk-Language'] = 'php';
            }
            if (!isset($headers['X-Sdk-Language-Version'])) {
                $headers['X-Sdk-Language-Version'] = PHP_VERSION;
            }
            if (!isset($headers['X-Sdk-Version'])) {
                $headers['X-Sdk-Version'] = Configuration::SDK_VERSION;
            }
            if (!isset($headers['User-Agent']) && $this->configuration->userAgent !== '') {
                $headers['User-Agent'] = $this->configuration->userAgent;
            }
            foreach ($this->configuration->defaultHeader as $key => $value) {
                if (!isset($headers[$key])) {
                    $headers[$key] = $value;
                }
            }
            $requestContext['headers'] = $headers;
            return $next($requestContext);
        };
    }
}
