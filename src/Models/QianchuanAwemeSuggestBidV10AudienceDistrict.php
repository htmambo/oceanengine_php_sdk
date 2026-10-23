<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeSuggestBidV10AudienceDistrict
{
    public const CITY_QianchuanAwemeSuggestBidV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAwemeSuggestBidV10AudienceDistrict = 'COUNTY';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanAwemeSuggestBidV10AudienceDistrict,
        self::COUNTY_QianchuanAwemeSuggestBidV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeSuggestBidV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
