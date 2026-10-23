<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoLocationType
{
    public const ALL_LOCATION_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoLocationType = 'ALL_LOCATION';
    public const TRAVEL_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LOCATION_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoLocationType,
        self::TRAVEL_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoLocationType', $value));
        }
        return (string) $value;
    }
}
