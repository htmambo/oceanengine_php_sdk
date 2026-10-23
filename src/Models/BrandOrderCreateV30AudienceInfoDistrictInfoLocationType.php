<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoDistrictInfoLocationType
{
    public const ALL_LOCATION_BrandOrderCreateV30AudienceInfoDistrictInfoLocationType = 'ALL_LOCATION';
    public const TRAVEL_BrandOrderCreateV30AudienceInfoDistrictInfoLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LOCATION_BrandOrderCreateV30AudienceInfoDistrictInfoLocationType,
        self::TRAVEL_BrandOrderCreateV30AudienceInfoDistrictInfoLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoDistrictInfoLocationType', $value));
        }
        return (string) $value;
    }
}
