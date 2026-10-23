<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType
{
    public const CITY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType = 'CITY';
    public const COUNTY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType = 'COUNTY';
    public const PROVINCE_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType = 'PROVINCE';

    public const ALLOWED_VALUES = [
        self::CITY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType,
        self::COUNTY_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType,
        self::PROVINCE_StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataDistrictSubRegionDistrictType', $value));
        }
        return (string) $value;
    }
}
