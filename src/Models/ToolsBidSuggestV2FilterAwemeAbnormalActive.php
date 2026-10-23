<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2FilterAwemeAbnormalActive
{
    public const Enum_0_ToolsBidSuggestV2FilterAwemeAbnormalActive = 0;
    public const Enum_1_ToolsBidSuggestV2FilterAwemeAbnormalActive = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_ToolsBidSuggestV2FilterAwemeAbnormalActive,
        self::Enum_1_ToolsBidSuggestV2FilterAwemeAbnormalActive,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2FilterAwemeAbnormalActive', $value));
        }
        return (string) $value;
    }
}
