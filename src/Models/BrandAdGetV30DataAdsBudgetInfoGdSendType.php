<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAdGetV30DataAdsBudgetInfoGdSendType
{
    public const Enum_1_BrandAdGetV30DataAdsBudgetInfoGdSendType = 1;
    public const Enum_2_BrandAdGetV30DataAdsBudgetInfoGdSendType = 2;
    public const Enum_3_BrandAdGetV30DataAdsBudgetInfoGdSendType = 3;
    public const Enum_4_BrandAdGetV30DataAdsBudgetInfoGdSendType = 4;
    public const Enum_5_BrandAdGetV30DataAdsBudgetInfoGdSendType = 5;
    public const Enum_6_BrandAdGetV30DataAdsBudgetInfoGdSendType = 6;
    public const Enum_7_BrandAdGetV30DataAdsBudgetInfoGdSendType = 7;
    public const Enum_8_BrandAdGetV30DataAdsBudgetInfoGdSendType = 8;
    public const Enum_9_BrandAdGetV30DataAdsBudgetInfoGdSendType = 9;
    public const Enum_10_BrandAdGetV30DataAdsBudgetInfoGdSendType = 10;
    public const Enum_11_BrandAdGetV30DataAdsBudgetInfoGdSendType = 11;
    public const Enum_12_BrandAdGetV30DataAdsBudgetInfoGdSendType = 12;
    public const Enum_13_BrandAdGetV30DataAdsBudgetInfoGdSendType = 13;
    public const Enum_14_BrandAdGetV30DataAdsBudgetInfoGdSendType = 14;
    public const Enum_15_BrandAdGetV30DataAdsBudgetInfoGdSendType = 15;
    public const Enum_16_BrandAdGetV30DataAdsBudgetInfoGdSendType = 16;
    public const Enum_17_BrandAdGetV30DataAdsBudgetInfoGdSendType = 17;
    public const Enum_18_BrandAdGetV30DataAdsBudgetInfoGdSendType = 18;
    public const Enum_19_BrandAdGetV30DataAdsBudgetInfoGdSendType = 19;
    public const Enum_20_BrandAdGetV30DataAdsBudgetInfoGdSendType = 20;
    public const Enum_21_BrandAdGetV30DataAdsBudgetInfoGdSendType = 21;
    public const Enum_22_BrandAdGetV30DataAdsBudgetInfoGdSendType = 22;
    public const Enum_23_BrandAdGetV30DataAdsBudgetInfoGdSendType = 23;
    public const Enum_24_BrandAdGetV30DataAdsBudgetInfoGdSendType = 24;
    public const Enum_25_BrandAdGetV30DataAdsBudgetInfoGdSendType = 25;
    public const Enum_26_BrandAdGetV30DataAdsBudgetInfoGdSendType = 26;
    public const Enum_27_BrandAdGetV30DataAdsBudgetInfoGdSendType = 27;
    public const Enum_28_BrandAdGetV30DataAdsBudgetInfoGdSendType = 28;
    public const Enum_29_BrandAdGetV30DataAdsBudgetInfoGdSendType = 29;
    public const Enum_40_BrandAdGetV30DataAdsBudgetInfoGdSendType = 40;

    public const ALLOWED_VALUES = [
        self::Enum_1_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_2_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_3_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_4_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_5_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_6_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_7_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_8_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_9_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_10_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_11_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_12_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_13_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_14_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_15_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_16_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_17_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_18_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_19_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_20_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_21_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_22_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_23_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_24_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_25_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_26_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_27_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_28_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_29_BrandAdGetV30DataAdsBudgetInfoGdSendType,
        self::Enum_40_BrandAdGetV30DataAdsBudgetInfoGdSendType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAdGetV30DataAdsBudgetInfoGdSendType', $value));
        }
        return (string) $value;
    }
}
