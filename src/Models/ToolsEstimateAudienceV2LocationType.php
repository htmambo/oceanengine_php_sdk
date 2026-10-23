<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2LocationType
{
    public const CURRENT_ToolsEstimateAudienceV2LocationType = 'CURRENT';
    public const TRAVEL_ToolsEstimateAudienceV2LocationType = 'TRAVEL';
    public const ALL_ToolsEstimateAudienceV2LocationType = 'ALL';
    public const HOME_ToolsEstimateAudienceV2LocationType = 'HOME';

    public const ALLOWED_VALUES = [
        self::CURRENT_ToolsEstimateAudienceV2LocationType,
        self::TRAVEL_ToolsEstimateAudienceV2LocationType,
        self::ALL_ToolsEstimateAudienceV2LocationType,
        self::HOME_ToolsEstimateAudienceV2LocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2LocationType', $value));
        }
        return (string) $value;
    }
}
