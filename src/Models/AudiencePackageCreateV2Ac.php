<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2Ac
{
    public const Enum_5_G_AudiencePackageCreateV2Ac = '5G';
    public const Enum_4_G_AudiencePackageCreateV2Ac = '4G';
    public const Enum_3_G_AudiencePackageCreateV2Ac = '3G';
    public const WIFI_AudiencePackageCreateV2Ac = 'WIFI';
    public const Enum_2_G_AudiencePackageCreateV2Ac = '2G';

    public const ALLOWED_VALUES = [
        self::Enum_5_G_AudiencePackageCreateV2Ac,
        self::Enum_4_G_AudiencePackageCreateV2Ac,
        self::Enum_3_G_AudiencePackageCreateV2Ac,
        self::WIFI_AudiencePackageCreateV2Ac,
        self::Enum_2_G_AudiencePackageCreateV2Ac,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2Ac', $value));
        }
        return (string) $value;
    }
}
