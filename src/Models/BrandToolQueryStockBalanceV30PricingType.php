<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30PricingType
{
    public const GD_BrandToolQueryStockBalanceV30PricingType = 'GD';

    public const ALLOWED_VALUES = [
        self::GD_BrandToolQueryStockBalanceV30PricingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30PricingType', $value));
        }
        return (string) $value;
    }
}
