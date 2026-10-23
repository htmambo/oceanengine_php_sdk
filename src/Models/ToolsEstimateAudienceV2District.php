<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2District
{
    public const COUNTY_ToolsEstimateAudienceV2District = 'COUNTY';
    public const BUSINESS_DISTRICT_ToolsEstimateAudienceV2District = 'BUSINESS_DISTRICT';
    public const OVERSEA_ToolsEstimateAudienceV2District = 'OVERSEA';
    public const CITY_ToolsEstimateAudienceV2District = 'CITY';
    public const REGION_ToolsEstimateAudienceV2District = 'REGION';
    public const NONE_ToolsEstimateAudienceV2District = 'NONE';

    public const ALLOWED_VALUES = [
        self::COUNTY_ToolsEstimateAudienceV2District,
        self::BUSINESS_DISTRICT_ToolsEstimateAudienceV2District,
        self::OVERSEA_ToolsEstimateAudienceV2District,
        self::CITY_ToolsEstimateAudienceV2District,
        self::REGION_ToolsEstimateAudienceV2District,
        self::NONE_ToolsEstimateAudienceV2District,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2District', $value));
        }
        return (string) $value;
    }
}
