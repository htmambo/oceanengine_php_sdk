<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceDistrict
{
    public const CITY_QianchuanAdUpdateV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAdUpdateV10AudienceDistrict = 'COUNTY';
    public const NONE_QianchuanAdUpdateV10AudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAdUpdateV10AudienceDistrict,
        self::COUNTY_QianchuanAdUpdateV10AudienceDistrict,
        self::NONE_QianchuanAdUpdateV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
