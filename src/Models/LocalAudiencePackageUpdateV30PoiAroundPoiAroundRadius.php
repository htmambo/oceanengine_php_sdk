<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius
{
    public const KM_10_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_10';
    public const KM_12_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_12';
    public const KM_15_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_15';
    public const KM_20_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_20';
    public const KM_25_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_25';
    public const KM_30_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_30';
    public const KM_6_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_6';
    public const KM_8_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius = 'KM_8';

    public const ALLOWED_VALUES = [
        self::KM_10_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_12_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_15_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_20_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_25_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_30_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_6_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
        self::KM_8_LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30PoiAroundPoiAroundRadius', $value));
        }
        return (string) $value;
    }
}
