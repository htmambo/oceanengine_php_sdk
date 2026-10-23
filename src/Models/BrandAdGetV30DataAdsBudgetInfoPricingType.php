<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsBudgetInfoPricingType
{
    public const Enum_1_BrandAdGetV30DataAdsBudgetInfoPricingType = 1;
    public const Enum_2_BrandAdGetV30DataAdsBudgetInfoPricingType = 2;
    public const Enum_3_BrandAdGetV30DataAdsBudgetInfoPricingType = 3;
    public const Enum_6_BrandAdGetV30DataAdsBudgetInfoPricingType = 6;
    public const Enum_7_BrandAdGetV30DataAdsBudgetInfoPricingType = 7;
    public const Enum_8_BrandAdGetV30DataAdsBudgetInfoPricingType = 8;
    public const Enum_9_BrandAdGetV30DataAdsBudgetInfoPricingType = 9;
    public const Enum_10_BrandAdGetV30DataAdsBudgetInfoPricingType = 10;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_2_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_3_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_6_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_7_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_8_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_9_BrandAdGetV30DataAdsBudgetInfoPricingType,
        self::Enum_10_BrandAdGetV30DataAdsBudgetInfoPricingType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsBudgetInfoPricingType', $value));
        }
        return (string) $value;
    }
}
