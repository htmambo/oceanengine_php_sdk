<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2ActionDays
{
    public const Enum_7_ToolsEstimateAudienceV2ActionDays = 7;
    public const Enum_15_ToolsEstimateAudienceV2ActionDays = 15;
    public const Enum_30_ToolsEstimateAudienceV2ActionDays = 30;
    public const Enum_60_ToolsEstimateAudienceV2ActionDays = 60;
    public const Enum_90_ToolsEstimateAudienceV2ActionDays = 90;
    public const Enum_180_ToolsEstimateAudienceV2ActionDays = 180;
    public const Enum_365_ToolsEstimateAudienceV2ActionDays = 365;

    public const ALLOWED_VALUES = [
        self::Enum_7_ToolsEstimateAudienceV2ActionDays,
        self::Enum_15_ToolsEstimateAudienceV2ActionDays,
        self::Enum_30_ToolsEstimateAudienceV2ActionDays,
        self::Enum_60_ToolsEstimateAudienceV2ActionDays,
        self::Enum_90_ToolsEstimateAudienceV2ActionDays,
        self::Enum_180_ToolsEstimateAudienceV2ActionDays,
        self::Enum_365_ToolsEstimateAudienceV2ActionDays,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2ActionDays', $value));
        }
        return (string) $value;
    }
}
