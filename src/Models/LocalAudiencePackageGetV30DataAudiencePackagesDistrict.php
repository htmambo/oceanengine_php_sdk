<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesDistrict
{
    public const ALL_LocalAudiencePackageGetV30DataAudiencePackagesDistrict = 'ALL';
    public const LOCAL_LocalAudiencePackageGetV30DataAudiencePackagesDistrict = 'LOCAL';
    public const POI_LocalAudiencePackageGetV30DataAudiencePackagesDistrict = 'POI';
    public const REGION_LocalAudiencePackageGetV30DataAudiencePackagesDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::ALL_LocalAudiencePackageGetV30DataAudiencePackagesDistrict,
        self::LOCAL_LocalAudiencePackageGetV30DataAudiencePackagesDistrict,
        self::POI_LocalAudiencePackageGetV30DataAudiencePackagesDistrict,
        self::REGION_LocalAudiencePackageGetV30DataAudiencePackagesDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesDistrict', $value));
        }
        return (string) $value;
    }
}
