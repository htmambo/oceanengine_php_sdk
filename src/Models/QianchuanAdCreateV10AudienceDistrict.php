<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceDistrict
{
    public const CITY_QianchuanAdCreateV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAdCreateV10AudienceDistrict = 'COUNTY';
    public const NONE_QianchuanAdCreateV10AudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAdCreateV10AudienceDistrict,
        self::COUNTY_QianchuanAdCreateV10AudienceDistrict,
        self::NONE_QianchuanAdCreateV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
