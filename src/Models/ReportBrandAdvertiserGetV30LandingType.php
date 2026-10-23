<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandAdvertiserGetV30LandingType
{
    public const Enum_1_ReportBrandAdvertiserGetV30LandingType = 1;
    public const Enum_10_ReportBrandAdvertiserGetV30LandingType = 10;
    public const Enum_11_ReportBrandAdvertiserGetV30LandingType = 11;
    public const Enum_12_ReportBrandAdvertiserGetV30LandingType = 12;
    public const Enum_13_ReportBrandAdvertiserGetV30LandingType = 13;
    public const Enum_2_ReportBrandAdvertiserGetV30LandingType = 2;
    public const Enum_3_ReportBrandAdvertiserGetV30LandingType = 3;
    public const Enum_4_ReportBrandAdvertiserGetV30LandingType = 4;
    public const Enum_5_ReportBrandAdvertiserGetV30LandingType = 5;
    public const Enum_6_ReportBrandAdvertiserGetV30LandingType = 6;
    public const Enum_7_ReportBrandAdvertiserGetV30LandingType = 7;
    public const Enum_8_ReportBrandAdvertiserGetV30LandingType = 8;
    public const Enum_9_ReportBrandAdvertiserGetV30LandingType = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_10_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_11_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_12_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_13_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_2_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_3_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_4_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_5_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_6_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_7_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_8_ReportBrandAdvertiserGetV30LandingType,
        self::Enum_9_ReportBrandAdvertiserGetV30LandingType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandAdvertiserGetV30LandingType', $value));
        }
        return (string) $value;
    }
}
