<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpProductStatusBatchUpdateV30OptStatus
{
    public const ENABLE_DpaEbpProductStatusBatchUpdateV30OptStatus = 'ENABLE';
    public const DISABLE_DpaEbpProductStatusBatchUpdateV30OptStatus = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_DpaEbpProductStatusBatchUpdateV30OptStatus,
        self::DISABLE_DpaEbpProductStatusBatchUpdateV30OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpProductStatusBatchUpdateV30OptStatus', $value));
        }
        return (string) $value;
    }
}
