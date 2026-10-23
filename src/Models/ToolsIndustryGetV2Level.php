<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsIndustryGetV2Level
{
    public const Enum_1_ToolsIndustryGetV2Level = 1;
    public const Enum_2_ToolsIndustryGetV2Level = 2;
    public const Enum_3_ToolsIndustryGetV2Level = 3;

    public const ALLOWED_VALUES = [
        self::Enum_1_ToolsIndustryGetV2Level,
        self::Enum_2_ToolsIndustryGetV2Level,
        self::Enum_3_ToolsIndustryGetV2Level,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsIndustryGetV2Level', $value));
        }
        return (string) $value;
    }
}
