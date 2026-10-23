<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10AudienceDistrict
{
    public const CITY_QianchuanAwemeEstimateProfitV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAwemeEstimateProfitV10AudienceDistrict = 'COUNTY';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAwemeEstimateProfitV10AudienceDistrict,
        self::COUNTY_QianchuanAwemeEstimateProfitV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
