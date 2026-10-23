<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30FrequencyInfoFrequencyStatus
{
    public const DISABLE_BrandToolQueryStockBalanceV30FrequencyInfoFrequencyStatus = 'DISABLE';
    public const ENABLE_BrandToolQueryStockBalanceV30FrequencyInfoFrequencyStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_BrandToolQueryStockBalanceV30FrequencyInfoFrequencyStatus,
        self::ENABLE_BrandToolQueryStockBalanceV30FrequencyInfoFrequencyStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30FrequencyInfoFrequencyStatus', $value));
        }
        return (string) $value;
    }
}
