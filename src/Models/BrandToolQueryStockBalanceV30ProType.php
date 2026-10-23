<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30ProType
{
    public const FEED_BrandToolQueryStockBalanceV30ProType = 'FEED';
    public const PLANT_GRASS_BrandToolQueryStockBalanceV30ProType = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::FEED_BrandToolQueryStockBalanceV30ProType,
        self::PLANT_GRASS_BrandToolQueryStockBalanceV30ProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30ProType', $value));
        }
        return (string) $value;
    }
}
