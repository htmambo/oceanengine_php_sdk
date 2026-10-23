<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceDistrict
{
    public const CITY_QianchuanToolsEstimateAudienceV10AudienceDistrict = 'CITY';
    public const COUNTY_QianchuanToolsEstimateAudienceV10AudienceDistrict = 'COUNTY';
    public const NONE_QianchuanToolsEstimateAudienceV10AudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::CITY_QianchuanToolsEstimateAudienceV10AudienceDistrict,
        self::COUNTY_QianchuanToolsEstimateAudienceV10AudienceDistrict,
        self::NONE_QianchuanToolsEstimateAudienceV10AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
