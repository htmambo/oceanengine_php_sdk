<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceDistrict
{
    public const COUNTY_AdGetV2DataAudienceDistrict = 'COUNTY';
    public const BUSINESS_DISTRICT_AdGetV2DataAudienceDistrict = 'BUSINESS_DISTRICT';
    public const OVERSEA_AdGetV2DataAudienceDistrict = 'OVERSEA';
    public const CITY_AdGetV2DataAudienceDistrict = 'CITY';
    public const REGION_AdGetV2DataAudienceDistrict = 'REGION';
    public const NONE_AdGetV2DataAudienceDistrict = 'NONE';

    public const ALLOWED_VALUES = [
        self::COUNTY_AdGetV2DataAudienceDistrict,
        self::BUSINESS_DISTRICT_AdGetV2DataAudienceDistrict,
        self::OVERSEA_AdGetV2DataAudienceDistrict,
        self::CITY_AdGetV2DataAudienceDistrict,
        self::REGION_AdGetV2DataAudienceDistrict,
        self::NONE_AdGetV2DataAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
