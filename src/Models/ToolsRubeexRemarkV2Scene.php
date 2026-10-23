<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRubeexRemarkV2Scene
{
    public const Enum_1_ToolsRubeexRemarkV2Scene = 1;
    public const Enum_2_ToolsRubeexRemarkV2Scene = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_ToolsRubeexRemarkV2Scene,
        self::Enum_2_ToolsRubeexRemarkV2Scene,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRubeexRemarkV2Scene', $value));
        }
        return (string) $value;
    }
}
