<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType
{
    public const ALL_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType = 'ALL';
    public const CURRENT_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType = 'CURRENT';
    public const HOME_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType = 'HOME';
    public const TRAVEL_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType,
        self::CURRENT_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType,
        self::HOME_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType,
        self::TRAVEL_LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesRegionLocationType', $value));
        }
        return (string) $value;
    }
}
