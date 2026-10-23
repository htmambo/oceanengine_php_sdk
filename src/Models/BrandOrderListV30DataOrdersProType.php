<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersProType
{
    public const FEED_BrandOrderListV30DataOrdersProType = 'FEED';
    public const MALL_BrandOrderListV30DataOrdersProType = 'MALL';
    public const PLANT_GRASS_BrandOrderListV30DataOrdersProType = 'PLANT_GRASS';
    public const SEARCH_BrandOrderListV30DataOrdersProType = 'SEARCH';
    public const SPLASH_BrandOrderListV30DataOrdersProType = 'SPLASH';

    public const ALLOWED_VALUES = [
        self::FEED_BrandOrderListV30DataOrdersProType,
        self::MALL_BrandOrderListV30DataOrdersProType,
        self::PLANT_GRASS_BrandOrderListV30DataOrdersProType,
        self::SEARCH_BrandOrderListV30DataOrdersProType,
        self::SPLASH_BrandOrderListV30DataOrdersProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersProType', $value));
        }
        return (string) $value;
    }
}
