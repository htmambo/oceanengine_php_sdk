<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListConvertStatus
{
    public const Enum_1_ToolsClueLifeGetV2DataListConvertStatus = 1;
    public const Enum_2_ToolsClueLifeGetV2DataListConvertStatus = 2;
    public const Enum_3_ToolsClueLifeGetV2DataListConvertStatus = 3;
    public const Enum_4_ToolsClueLifeGetV2DataListConvertStatus = 4;
    public const Enum_5_ToolsClueLifeGetV2DataListConvertStatus = 5;
    public const Enum_MINUS_1_ToolsClueLifeGetV2DataListConvertStatus = -1;

    public const ALLOWED_VALUES = [
        self::Enum_1_ToolsClueLifeGetV2DataListConvertStatus,
        self::Enum_2_ToolsClueLifeGetV2DataListConvertStatus,
        self::Enum_3_ToolsClueLifeGetV2DataListConvertStatus,
        self::Enum_4_ToolsClueLifeGetV2DataListConvertStatus,
        self::Enum_5_ToolsClueLifeGetV2DataListConvertStatus,
        self::Enum_MINUS_1_ToolsClueLifeGetV2DataListConvertStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListConvertStatus', $value));
        }
        return (string) $value;
    }
}
