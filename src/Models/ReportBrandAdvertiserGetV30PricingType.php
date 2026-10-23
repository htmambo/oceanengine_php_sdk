<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandAdvertiserGetV30PricingType
{
    public const Enum_1_ReportBrandAdvertiserGetV30PricingType = 1;
    public const Enum_10_ReportBrandAdvertiserGetV30PricingType = 10;
    public const Enum_2_ReportBrandAdvertiserGetV30PricingType = 2;
    public const Enum_3_ReportBrandAdvertiserGetV30PricingType = 3;
    public const Enum_4_ReportBrandAdvertiserGetV30PricingType = 4;
    public const Enum_5_ReportBrandAdvertiserGetV30PricingType = 5;
    public const Enum_6_ReportBrandAdvertiserGetV30PricingType = 6;
    public const Enum_7_ReportBrandAdvertiserGetV30PricingType = 7;
    public const Enum_8_ReportBrandAdvertiserGetV30PricingType = 8;
    public const Enum_9_ReportBrandAdvertiserGetV30PricingType = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_10_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_2_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_3_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_4_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_5_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_6_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_7_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_8_ReportBrandAdvertiserGetV30PricingType,
        self::Enum_9_ReportBrandAdvertiserGetV30PricingType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandAdvertiserGetV30PricingType', $value));
        }
        return (string) $value;
    }
}
