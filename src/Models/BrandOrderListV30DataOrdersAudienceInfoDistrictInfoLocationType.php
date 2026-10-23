<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType
{
    public const ALL_LOCATION_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType = 'ALL_LOCATION';
    public const CURRENT_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType = 'CURRENT';
    public const HOME_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType = 'HOME';
    public const TRAVEL_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LOCATION_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType,
        self::CURRENT_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType,
        self::HOME_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType,
        self::TRAVEL_BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAudienceInfoDistrictInfoLocationType', $value));
        }
        return (string) $value;
    }
}
