<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAdStockInfosAppOrigin
{
    public const Enum_1_BrandAdGetV30DataAdsAdStockInfosAppOrigin = 1;
    public const Enum_2_BrandAdGetV30DataAdsAdStockInfosAppOrigin = 2;
    public const Enum_3_BrandAdGetV30DataAdsAdStockInfosAppOrigin = 3;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsAdStockInfosAppOrigin,
        self::Enum_2_BrandAdGetV30DataAdsAdStockInfosAppOrigin,
        self::Enum_3_BrandAdGetV30DataAdsAdStockInfosAppOrigin,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAdStockInfosAppOrigin', $value));
        }
        return (string) $value;
    }
}
