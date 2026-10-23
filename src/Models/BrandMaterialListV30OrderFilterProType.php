<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30OrderFilterProType
{
    public const FEED_BrandMaterialListV30OrderFilterProType = 'FEED';
    public const MALL_BrandMaterialListV30OrderFilterProType = 'MALL';
    public const PLANT_GRASS_BrandMaterialListV30OrderFilterProType = 'PLANT_GRASS';
    public const SEARCH_BrandMaterialListV30OrderFilterProType = 'SEARCH';
    public const SPLASH_BrandMaterialListV30OrderFilterProType = 'SPLASH';

    public const ALLOWED_VALUES = [
        self::FEED_BrandMaterialListV30OrderFilterProType,
        self::MALL_BrandMaterialListV30OrderFilterProType,
        self::PLANT_GRASS_BrandMaterialListV30OrderFilterProType,
        self::SEARCH_BrandMaterialListV30OrderFilterProType,
        self::SPLASH_BrandMaterialListV30OrderFilterProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30OrderFilterProType', $value));
        }
        return (string) $value;
    }
}
