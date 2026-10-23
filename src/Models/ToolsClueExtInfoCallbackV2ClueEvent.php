<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueExtInfoCallbackV2ClueEvent
{
    public const Enum_1_ToolsClueExtInfoCallbackV2ClueEvent = 1;
    public const Enum_2_ToolsClueExtInfoCallbackV2ClueEvent = 2;
    public const Enum_3_ToolsClueExtInfoCallbackV2ClueEvent = 3;
    public const Enum_4_ToolsClueExtInfoCallbackV2ClueEvent = 4;

    public const ALLOWED_VALUES = [
        self::Enum_1_ToolsClueExtInfoCallbackV2ClueEvent,
        self::Enum_2_ToolsClueExtInfoCallbackV2ClueEvent,
        self::Enum_3_ToolsClueExtInfoCallbackV2ClueEvent,
        self::Enum_4_ToolsClueExtInfoCallbackV2ClueEvent,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueExtInfoCallbackV2ClueEvent', $value));
        }
        return (string) $value;
    }
}
