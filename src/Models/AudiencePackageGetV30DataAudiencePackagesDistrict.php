<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesDistrict
{
    public const BUSINESS_DISTRICT_AudiencePackageGetV30DataAudiencePackagesDistrict = 'BUSINESS_DISTRICT';
    public const NONE_AudiencePackageGetV30DataAudiencePackagesDistrict = 'NONE';
    public const OVERSEA_AudiencePackageGetV30DataAudiencePackagesDistrict = 'OVERSEA';
    public const REGION_AudiencePackageGetV30DataAudiencePackagesDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::BUSINESS_DISTRICT_AudiencePackageGetV30DataAudiencePackagesDistrict,
        self::NONE_AudiencePackageGetV30DataAudiencePackagesDistrict,
        self::OVERSEA_AudiencePackageGetV30DataAudiencePackagesDistrict,
        self::REGION_AudiencePackageGetV30DataAudiencePackagesDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesDistrict', $value));
        }
        return (string) $value;
    }
}
