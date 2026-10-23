<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2Ac
{
    public const Enum_5_G_ToolsEstimateAudienceV2Ac = '5G';
    public const Enum_4_G_ToolsEstimateAudienceV2Ac = '4G';
    public const Enum_3_G_ToolsEstimateAudienceV2Ac = '3G';
    public const WIFI_ToolsEstimateAudienceV2Ac = 'WIFI';
    public const Enum_2_G_ToolsEstimateAudienceV2Ac = '2G';

    public const ALLOWED_VALUES = [
        self::Enum_5_G_ToolsEstimateAudienceV2Ac,
        self::Enum_4_G_ToolsEstimateAudienceV2Ac,
        self::Enum_3_G_ToolsEstimateAudienceV2Ac,
        self::WIFI_ToolsEstimateAudienceV2Ac,
        self::Enum_2_G_ToolsEstimateAudienceV2Ac,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2Ac', $value));
        }
        return (string) $value;
    }
}
