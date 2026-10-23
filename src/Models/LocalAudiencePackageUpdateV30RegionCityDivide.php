<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30RegionCityDivide
{
    public const BY_LEVEL_LocalAudiencePackageUpdateV30RegionCityDivide = 'BY_LEVEL';
    public const BY_LOCATION_LocalAudiencePackageUpdateV30RegionCityDivide = 'BY_LOCATION';

    public const ALLOWED_VALUES = [
        self::BY_LEVEL_LocalAudiencePackageUpdateV30RegionCityDivide,
        self::BY_LOCATION_LocalAudiencePackageUpdateV30RegionCityDivide,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30RegionCityDivide', $value));
        }
        return (string) $value;
    }
}
