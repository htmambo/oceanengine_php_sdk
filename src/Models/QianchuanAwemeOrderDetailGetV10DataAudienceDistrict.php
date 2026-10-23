<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataAudienceDistrict
{
    public const CITY_QianchuanAwemeOrderDetailGetV10DataAudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAwemeOrderDetailGetV10DataAudienceDistrict = 'COUNTY';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAwemeOrderDetailGetV10DataAudienceDistrict,
        self::COUNTY_QianchuanAwemeOrderDetailGetV10DataAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
