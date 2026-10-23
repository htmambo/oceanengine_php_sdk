<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupOptionsV2DataDistrictDistrictType
{
    public const CITY_StarVasGetBoostGroupOptionsV2DataDistrictDistrictType = 'CITY';
    public const COUNTY_StarVasGetBoostGroupOptionsV2DataDistrictDistrictType = 'COUNTY';
    public const PROVINCE_StarVasGetBoostGroupOptionsV2DataDistrictDistrictType = 'PROVINCE';

    public const ALLOWED_VALUES = [
        self::CITY_StarVasGetBoostGroupOptionsV2DataDistrictDistrictType,
        self::COUNTY_StarVasGetBoostGroupOptionsV2DataDistrictDistrictType,
        self::PROVINCE_StarVasGetBoostGroupOptionsV2DataDistrictDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupOptionsV2DataDistrictDistrictType', $value));
        }
        return (string) $value;
    }
}
