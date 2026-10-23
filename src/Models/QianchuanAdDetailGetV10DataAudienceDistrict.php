<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceDistrict
{
    public const BUSINESS_DISTRICT_QianchuanAdDetailGetV10DataAudienceDistrict = 'BUSINESS_DISTRICT';
    public const CITY_QianchuanAdDetailGetV10DataAudienceDistrict = 'CITY';
    public const COUNTY_QianchuanAdDetailGetV10DataAudienceDistrict = 'COUNTY';
    public const NONE_QianchuanAdDetailGetV10DataAudienceDistrict = 'NONE';
    public const OVERSEA_QianchuanAdDetailGetV10DataAudienceDistrict = 'OVERSEA';
    public const REGION_QianchuanAdDetailGetV10DataAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_QianchuanAdDetailGetV10DataAudienceDistrict,
        self::CITY_QianchuanAdDetailGetV10DataAudienceDistrict,
        self::COUNTY_QianchuanAdDetailGetV10DataAudienceDistrict,
        self::NONE_QianchuanAdDetailGetV10DataAudienceDistrict,
        self::OVERSEA_QianchuanAdDetailGetV10DataAudienceDistrict,
        self::REGION_QianchuanAdDetailGetV10DataAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
