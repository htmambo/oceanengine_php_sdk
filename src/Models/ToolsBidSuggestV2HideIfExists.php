<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2HideIfExists
{
    public const Enum_0_ToolsBidSuggestV2HideIfExists = 0;
    public const Enum_1_ToolsBidSuggestV2HideIfExists = 1;
    public const Enum_2_ToolsBidSuggestV2HideIfExists = 2;

    public const ALLOWED_VALUES = [
        self::Enum_0_ToolsBidSuggestV2HideIfExists,
        self::Enum_1_ToolsBidSuggestV2HideIfExists,
        self::Enum_2_ToolsBidSuggestV2HideIfExists,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2HideIfExists', $value));
        }
        return (string) $value;
    }
}
