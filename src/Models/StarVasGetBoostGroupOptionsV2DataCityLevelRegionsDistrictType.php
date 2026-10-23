<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType
{
    public const CITY_StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType = 'CITY';
    public const COUNTY_StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType = 'COUNTY';
    public const PROVINCE_StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType = 'PROVINCE';

    public const ALLOWED_VALUES = [
        self::CITY_StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType,
        self::COUNTY_StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType,
        self::PROVINCE_StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataCityLevelRegionsDistrictType', $value));
        }
        return (string) $value;
    }
}
