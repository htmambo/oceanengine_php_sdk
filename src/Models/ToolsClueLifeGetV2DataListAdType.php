<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListAdType
{
    public const Enum_1_ToolsClueLifeGetV2DataListAdType = 1;
    public const Enum_2_ToolsClueLifeGetV2DataListAdType = 2;
    public const Enum_3_ToolsClueLifeGetV2DataListAdType = 3;
    public const Enum_4_ToolsClueLifeGetV2DataListAdType = 4;
    public const Enum_5_ToolsClueLifeGetV2DataListAdType = 5;
    public const Enum_6_ToolsClueLifeGetV2DataListAdType = 6;
    public const Enum_7_ToolsClueLifeGetV2DataListAdType = 7;
    public const Enum_8_ToolsClueLifeGetV2DataListAdType = 8;
    public const Enum_9_ToolsClueLifeGetV2DataListAdType = 9;
    public const Enum_10_ToolsClueLifeGetV2DataListAdType = 10;
    public const Enum_11_ToolsClueLifeGetV2DataListAdType = 11;
    public const Enum_12_ToolsClueLifeGetV2DataListAdType = 12;
    public const Enum_13_ToolsClueLifeGetV2DataListAdType = 13;
    public const Enum_14_ToolsClueLifeGetV2DataListAdType = 14;
    public const Enum_15_ToolsClueLifeGetV2DataListAdType = 15;
    public const Enum_16_ToolsClueLifeGetV2DataListAdType = 16;
    public const Enum_101_ToolsClueLifeGetV2DataListAdType = 101;
    public const Enum_102_ToolsClueLifeGetV2DataListAdType = 102;
    public const Enum_200_ToolsClueLifeGetV2DataListAdType = 200;
    public const Enum_300_ToolsClueLifeGetV2DataListAdType = 300;
    public const Enum_17_ToolsClueLifeGetV2DataListAdType = 17;
    public const Enum_18_ToolsClueLifeGetV2DataListAdType = 18;

    public const ALLOWED_VALUES = [
        self::Enum_1_ToolsClueLifeGetV2DataListAdType,
        self::Enum_2_ToolsClueLifeGetV2DataListAdType,
        self::Enum_3_ToolsClueLifeGetV2DataListAdType,
        self::Enum_4_ToolsClueLifeGetV2DataListAdType,
        self::Enum_5_ToolsClueLifeGetV2DataListAdType,
        self::Enum_6_ToolsClueLifeGetV2DataListAdType,
        self::Enum_7_ToolsClueLifeGetV2DataListAdType,
        self::Enum_8_ToolsClueLifeGetV2DataListAdType,
        self::Enum_9_ToolsClueLifeGetV2DataListAdType,
        self::Enum_10_ToolsClueLifeGetV2DataListAdType,
        self::Enum_11_ToolsClueLifeGetV2DataListAdType,
        self::Enum_12_ToolsClueLifeGetV2DataListAdType,
        self::Enum_13_ToolsClueLifeGetV2DataListAdType,
        self::Enum_14_ToolsClueLifeGetV2DataListAdType,
        self::Enum_15_ToolsClueLifeGetV2DataListAdType,
        self::Enum_16_ToolsClueLifeGetV2DataListAdType,
        self::Enum_101_ToolsClueLifeGetV2DataListAdType,
        self::Enum_102_ToolsClueLifeGetV2DataListAdType,
        self::Enum_200_ToolsClueLifeGetV2DataListAdType,
        self::Enum_300_ToolsClueLifeGetV2DataListAdType,
        self::Enum_17_ToolsClueLifeGetV2DataListAdType,
        self::Enum_18_ToolsClueLifeGetV2DataListAdType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListAdType', $value));
        }
        return (string) $value;
    }
}
