<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AudienceInfoDistrictInfoLocationType
{
    public const ALL_LOCATION_BrandQueryStockV30AudienceInfoDistrictInfoLocationType = 'ALL_LOCATION';
    public const TRAVEL_BrandQueryStockV30AudienceInfoDistrictInfoLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LOCATION_BrandQueryStockV30AudienceInfoDistrictInfoLocationType,
        self::TRAVEL_BrandQueryStockV30AudienceInfoDistrictInfoLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AudienceInfoDistrictInfoLocationType', $value));
        }
        return (string) $value;
    }
}
