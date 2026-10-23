<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRegionGetV2RegionLevel
{
    public const REGION_LEVEL_BUSINESS_DISTRICT_ToolsRegionGetV2RegionLevel = 'REGION_LEVEL_BUSINESS_DISTRICT';
    public const REGION_LEVEL_DISTRICT_ToolsRegionGetV2RegionLevel = 'REGION_LEVEL_DISTRICT';
    public const REGION_LEVEL_CITY_ToolsRegionGetV2RegionLevel = 'REGION_LEVEL_CITY';
    public const REGION_LEVEL_PROVINCE_ToolsRegionGetV2RegionLevel = 'REGION_LEVEL_PROVINCE';

    public const ALLOWED_VALUES = [
        self::REGION_LEVEL_BUSINESS_DISTRICT_ToolsRegionGetV2RegionLevel,
        self::REGION_LEVEL_DISTRICT_ToolsRegionGetV2RegionLevel,
        self::REGION_LEVEL_CITY_ToolsRegionGetV2RegionLevel,
        self::REGION_LEVEL_PROVINCE_ToolsRegionGetV2RegionLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRegionGetV2RegionLevel', $value));
        }
        return (string) $value;
    }
}
