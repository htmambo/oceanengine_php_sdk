<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2Age
{
    public const AGE_BETWEEN_18_23_ToolsBidSuggestV2Age = 'AGE_BETWEEN_18_23';
    public const AGE_BELOW_18_ToolsBidSuggestV2Age = 'AGE_BELOW_18';
    public const AGE_BETWEEN_24_30_ToolsBidSuggestV2Age = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_ToolsBidSuggestV2Age = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_49_ToolsBidSuggestV2Age = 'AGE_BETWEEN_41_49';
    public const AGE_ABOVE_50_ToolsBidSuggestV2Age = 'AGE_ABOVE_50';

    public const ALLOWED_VALUES = [
        self::AGE_BETWEEN_18_23_ToolsBidSuggestV2Age,
        self::AGE_BELOW_18_ToolsBidSuggestV2Age,
        self::AGE_BETWEEN_24_30_ToolsBidSuggestV2Age,
        self::AGE_BETWEEN_31_40_ToolsBidSuggestV2Age,
        self::AGE_BETWEEN_41_49_ToolsBidSuggestV2Age,
        self::AGE_ABOVE_50_ToolsBidSuggestV2Age,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2Age', $value));
        }
        return (string) $value;
    }
}
