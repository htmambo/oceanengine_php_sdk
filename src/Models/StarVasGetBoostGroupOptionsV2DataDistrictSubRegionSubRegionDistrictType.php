<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType
{
    public const CITY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType = 'CITY';
    public const COUNTY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType = 'COUNTY';
    public const PROVINCE_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType = 'PROVINCE';

    public const ALLOWED_VALUES = [
        self::CITY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType,
        self::COUNTY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType,
        self::PROVINCE_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataDistrictSubRegionSubRegionDistrictType', $value));
        }
        return (string) $value;
    }
}
