<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesAc
{
    public const Enum_2_G_AudiencePackageGetV30DataAudiencePackagesAc = '2G';
    public const Enum_3_G_AudiencePackageGetV30DataAudiencePackagesAc = '3G';
    public const Enum_4_G_AudiencePackageGetV30DataAudiencePackagesAc = '4G';
    public const Enum_5_G_AudiencePackageGetV30DataAudiencePackagesAc = '5G';
    public const WIFI_AudiencePackageGetV30DataAudiencePackagesAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::Enum_2_G_AudiencePackageGetV30DataAudiencePackagesAc,
        self::Enum_3_G_AudiencePackageGetV30DataAudiencePackagesAc,
        self::Enum_4_G_AudiencePackageGetV30DataAudiencePackagesAc,
        self::Enum_5_G_AudiencePackageGetV30DataAudiencePackagesAc,
        self::WIFI_AudiencePackageGetV30DataAudiencePackagesAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesAc', $value));
        }
        return (string) $value;
    }
}
