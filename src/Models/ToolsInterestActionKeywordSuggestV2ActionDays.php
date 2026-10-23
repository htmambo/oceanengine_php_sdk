<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInterestActionKeywordSuggestV2ActionDays
{
    public const Enum_15_ToolsInterestActionKeywordSuggestV2ActionDays = 15;
    public const Enum_180_ToolsInterestActionKeywordSuggestV2ActionDays = 180;
    public const Enum_30_ToolsInterestActionKeywordSuggestV2ActionDays = 30;
    public const Enum_365_ToolsInterestActionKeywordSuggestV2ActionDays = 365;
    public const Enum_60_ToolsInterestActionKeywordSuggestV2ActionDays = 60;
    public const Enum_7_ToolsInterestActionKeywordSuggestV2ActionDays = 7;
    public const Enum_90_ToolsInterestActionKeywordSuggestV2ActionDays = 90;

    public const ALLOWED_VALUES = [
        self::Enum_15_ToolsInterestActionKeywordSuggestV2ActionDays,
        self::Enum_180_ToolsInterestActionKeywordSuggestV2ActionDays,
        self::Enum_30_ToolsInterestActionKeywordSuggestV2ActionDays,
        self::Enum_365_ToolsInterestActionKeywordSuggestV2ActionDays,
        self::Enum_60_ToolsInterestActionKeywordSuggestV2ActionDays,
        self::Enum_7_ToolsInterestActionKeywordSuggestV2ActionDays,
        self::Enum_90_ToolsInterestActionKeywordSuggestV2ActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInterestActionKeywordSuggestV2ActionDays', $value));
        }
        return (string) $value;
    }
}
