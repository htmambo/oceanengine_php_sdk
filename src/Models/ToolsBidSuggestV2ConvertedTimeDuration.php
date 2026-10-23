<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2ConvertedTimeDuration
{
    public const TWELVE_MONTH_ToolsBidSuggestV2ConvertedTimeDuration = 'TWELVE_MONTH';
    public const TODAY_ToolsBidSuggestV2ConvertedTimeDuration = 'TODAY';
    public const THREE_MONTH_ToolsBidSuggestV2ConvertedTimeDuration = 'THREE_MONTH';
    public const ONE_MONTH_ToolsBidSuggestV2ConvertedTimeDuration = 'ONE_MONTH';
    public const SEVEN_DAY_ToolsBidSuggestV2ConvertedTimeDuration = 'SEVEN_DAY';
    public const SIX_MONTH_ToolsBidSuggestV2ConvertedTimeDuration = 'SIX_MONTH';
    public const NONE_ToolsBidSuggestV2ConvertedTimeDuration = 'NONE';

    public const ALLOWED_VALUES = [
        self::TWELVE_MONTH_ToolsBidSuggestV2ConvertedTimeDuration,
        self::TODAY_ToolsBidSuggestV2ConvertedTimeDuration,
        self::THREE_MONTH_ToolsBidSuggestV2ConvertedTimeDuration,
        self::ONE_MONTH_ToolsBidSuggestV2ConvertedTimeDuration,
        self::SEVEN_DAY_ToolsBidSuggestV2ConvertedTimeDuration,
        self::SIX_MONTH_ToolsBidSuggestV2ConvertedTimeDuration,
        self::NONE_ToolsBidSuggestV2ConvertedTimeDuration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2ConvertedTimeDuration', $value));
        }
        return (string) $value;
    }
}
