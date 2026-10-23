<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaProductStatusBatchUpdateV2OptStatus
{
    public const ENABLE_DpaProductStatusBatchUpdateV2OptStatus = 'ENABLE';
    public const DISABLE_DpaProductStatusBatchUpdateV2OptStatus = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::ENABLE_DpaProductStatusBatchUpdateV2OptStatus,
        self::DISABLE_DpaProductStatusBatchUpdateV2OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaProductStatusBatchUpdateV2OptStatus', $value));
        }
        return (string) $value;
    }
}
