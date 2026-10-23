<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueLifeGetV2DataListEffectiveState
{
    public const Enum_0_ToolsClueLifeGetV2DataListEffectiveState = 0;
    public const Enum_1_ToolsClueLifeGetV2DataListEffectiveState = 1;
    public const Enum_2_ToolsClueLifeGetV2DataListEffectiveState = 2;
    public const Enum_3_ToolsClueLifeGetV2DataListEffectiveState = 3;
    public const Enum_6_ToolsClueLifeGetV2DataListEffectiveState = 6;
    public const Enum_7_ToolsClueLifeGetV2DataListEffectiveState = 7;
    public const Enum_204_ToolsClueLifeGetV2DataListEffectiveState = 204;
    public const Enum_901_ToolsClueLifeGetV2DataListEffectiveState = 901;

    public const ALLOWED_VALUES = [
        self::Enum_0_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_1_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_2_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_3_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_6_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_7_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_204_ToolsClueLifeGetV2DataListEffectiveState,
        self::Enum_901_ToolsClueLifeGetV2DataListEffectiveState,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueLifeGetV2DataListEffectiveState', $value));
        }
        return (string) $value;
    }
}
