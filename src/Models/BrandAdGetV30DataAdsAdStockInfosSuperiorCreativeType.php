<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType
{
    public const Enum_1_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 1;
    public const Enum_2_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 2;
    public const Enum_3_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 3;
    public const Enum_4_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 4;
    public const Enum_5_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 5;
    public const Enum_6_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 6;
    public const Enum_7_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType = 7;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
        self::Enum_2_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
        self::Enum_3_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
        self::Enum_4_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
        self::Enum_5_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
        self::Enum_6_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
        self::Enum_7_BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsAdStockInfosSuperiorCreativeType', $value));
        }
        return (string) $value;
    }
}
