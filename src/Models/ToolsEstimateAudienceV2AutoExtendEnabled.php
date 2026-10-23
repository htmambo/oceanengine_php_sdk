<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2AutoExtendEnabled
{
    public const Enum_0_ToolsEstimateAudienceV2AutoExtendEnabled = 0;
    public const Enum_1_ToolsEstimateAudienceV2AutoExtendEnabled = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_ToolsEstimateAudienceV2AutoExtendEnabled,
        self::Enum_1_ToolsEstimateAudienceV2AutoExtendEnabled,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2AutoExtendEnabled', $value));
        }
        return (string) $value;
    }
}
