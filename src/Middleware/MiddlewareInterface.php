<?php

declare(strict_types=1);

namespace Oceanengine\Middleware;

/**
 * Contract for middleware factories: takes the next handler and returns a
 * handler with the same signature.
 *
 * @phpstan-type Handler callable(array<string, mixed>): array{statusCode: int, headers: array, body: string}
 */
interface MiddlewareInterface
{
    /**
     * @param callable $next fn(array $requestContext): array
     * @return callable fn(array $requestContext): array
     */
    public function __invoke(callable $next): callable;
}
