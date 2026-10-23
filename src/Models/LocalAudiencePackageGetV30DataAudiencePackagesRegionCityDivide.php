<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide
{
    public const BY_LEVEL_LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide = 'BY_LEVEL';
    public const BY_LOCATION_LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide = 'BY_LOCATION';

    public const ALLOWED_VALUES = [
        self::BY_LEVEL_LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide,
        self::BY_LOCATION_LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesRegionCityDivide', $value));
        }
        return (string) $value;
    }
}
