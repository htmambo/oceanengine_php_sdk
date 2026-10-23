<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListDistrict
{
    public const CITY_QianchuanOrientationPackageGetV10DataListDistrict = 'CITY';
    public const COUNTY_QianchuanOrientationPackageGetV10DataListDistrict = 'COUNTY';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanOrientationPackageGetV10DataListDistrict,
        self::COUNTY_QianchuanOrientationPackageGetV10DataListDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListDistrict', $value));
        }
        return (string) $value;
    }
}
