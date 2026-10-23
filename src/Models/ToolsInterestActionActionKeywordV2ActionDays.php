<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInterestActionActionKeywordV2ActionDays
{
    public const Enum_15_ToolsInterestActionActionKeywordV2ActionDays = 15;
    public const Enum_180_ToolsInterestActionActionKeywordV2ActionDays = 180;
    public const Enum_30_ToolsInterestActionActionKeywordV2ActionDays = 30;
    public const Enum_365_ToolsInterestActionActionKeywordV2ActionDays = 365;
    public const Enum_60_ToolsInterestActionActionKeywordV2ActionDays = 60;
    public const Enum_7_ToolsInterestActionActionKeywordV2ActionDays = 7;
    public const Enum_90_ToolsInterestActionActionKeywordV2ActionDays = 90;

    public const ALLOWED_VALUES = [
        self::Enum_15_ToolsInterestActionActionKeywordV2ActionDays,
        self::Enum_180_ToolsInterestActionActionKeywordV2ActionDays,
        self::Enum_30_ToolsInterestActionActionKeywordV2ActionDays,
        self::Enum_365_ToolsInterestActionActionKeywordV2ActionDays,
        self::Enum_60_ToolsInterestActionActionKeywordV2ActionDays,
        self::Enum_7_ToolsInterestActionActionKeywordV2ActionDays,
        self::Enum_90_ToolsInterestActionActionKeywordV2ActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInterestActionActionKeywordV2ActionDays', $value));
        }
        return (string) $value;
    }
}
