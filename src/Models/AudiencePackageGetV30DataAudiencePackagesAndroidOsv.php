<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesAndroidOsv
{
    public const Enum_0_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '0.0';
    public const Enum_10_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '10.0';
    public const Enum_10_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '10.1';
    public const Enum_11_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '11.0';
    public const Enum_2_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '2.0';
    public const Enum_2_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '2.1';
    public const Enum_2_2_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '2.2';
    public const Enum_2_3_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '2.3';
    public const Enum_3_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '3.0';
    public const Enum_3_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '3.1';
    public const Enum_3_2_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '3.2';
    public const Enum_4_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '4.0';
    public const Enum_4_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '4.1';
    public const Enum_4_2_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '4.2';
    public const Enum_4_3_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '4.3';
    public const Enum_4_4_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '4.4';
    public const Enum_4_5_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '4.5';
    public const Enum_5_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '5.0';
    public const Enum_5_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '5.1';
    public const Enum_6_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '6.0';
    public const Enum_7_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '7.0';
    public const Enum_7_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '7.1';
    public const Enum_8_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '8.0';
    public const Enum_8_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '8.1';
    public const Enum_9_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv = '9.0';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_10_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_10_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_11_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_2_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_2_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_2_2_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_2_3_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_3_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_3_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_3_2_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_4_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_4_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_4_2_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_4_3_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_4_4_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_4_5_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_5_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_5_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_6_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_7_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_7_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_8_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_8_1_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
        self::Enum_9_0_AudiencePackageGetV30DataAudiencePackagesAndroidOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesAndroidOsv', $value));
        }
        return (string) $value;
    }
}
