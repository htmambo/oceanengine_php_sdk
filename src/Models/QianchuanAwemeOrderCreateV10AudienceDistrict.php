<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10AudienceDistrict
{
    public const CITY_QianchuanAwemeOrderCreateV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAwemeOrderCreateV10AudienceDistrict = 'COUNTY';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAwemeOrderCreateV10AudienceDistrict,
        self::COUNTY_QianchuanAwemeOrderCreateV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
