<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterProType
{
    public const FEED_BrandOrderListV30FilterProType = 'FEED';
    public const MALL_BrandOrderListV30FilterProType = 'MALL';
    public const PLANT_GRASS_BrandOrderListV30FilterProType = 'PLANT_GRASS';
    public const SEARCH_BrandOrderListV30FilterProType = 'SEARCH';
    public const SPLASH_BrandOrderListV30FilterProType = 'SPLASH';

    public const ALLOWED_VALUES = [
        self::FEED_BrandOrderListV30FilterProType,
        self::MALL_BrandOrderListV30FilterProType,
        self::PLANT_GRASS_BrandOrderListV30FilterProType,
        self::SEARCH_BrandOrderListV30FilterProType,
        self::SPLASH_BrandOrderListV30FilterProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterProType', $value));
        }
        return (string) $value;
    }
}
