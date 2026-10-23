<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius
{
    public const KM_10_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_10';
    public const KM_12_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_12';
    public const KM_15_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_15';
    public const KM_20_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_20';
    public const KM_25_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_25';
    public const KM_30_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_30';
    public const KM_6_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_6';
    public const KM_8_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius = 'KM_8';

    public const ALLOWED_VALUES = [
        self::KM_10_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_12_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_15_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_20_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_25_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_30_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_6_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
        self::KM_8_LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesPoiAroundPoiAroundRadius', $value));
        }
        return (string) $value;
    }
}
