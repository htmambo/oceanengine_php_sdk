<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesDeviceBrand
{
    public const Enum_360_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = '360';
    public const APPLE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'APPLE';
    public const CHINAMOBILE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'COOLPAD';
    public const GIONEE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'GIONEE';
    public const GOOGLE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'GOOGLE';
    public const HISENSE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'HISENSE';
    public const HONOR_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'HONOR';
    public const HTC_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'HTC';
    public const HUAWEI_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'HUAWEI';
    public const LENOVO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'LENOVO';
    public const LETV_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'LETV';
    public const LG_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'LG';
    public const MEIZU_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'MEIZU';
    public const MOTO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'MOTO';
    public const NOKIA_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'NOKIA';
    public const NUBIA_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'NUBIA';
    public const ONEPLUS_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'ONEPLUS';
    public const OPPO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'OPPO';
    public const PEPPER_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'PEPPER';
    public const QIKU_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'QIKU';
    public const SAMSUNG_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'SMARTISAN';
    public const SONY_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'SONY';
    public const TCL_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'TCL';
    public const VIVO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'VIVO';
    public const XIAOMI_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'XIAOMI';
    public const ZTE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::APPLE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::CHINAMOBILE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::COOLPAD_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::GIONEE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::GOOGLE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::HISENSE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::HONOR_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::HTC_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::HUAWEI_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::LENOVO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::LETV_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::LG_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::MEIZU_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::MOTO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::NOKIA_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::NUBIA_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::ONEPLUS_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::OPPO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::PEPPER_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::QIKU_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::SAMSUNG_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::SMARTISAN_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::SONY_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::TCL_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::VIVO_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::XIAOMI_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
        self::ZTE_AudiencePackageGetV30DataAudiencePackagesDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesDeviceBrand', $value));
        }
        return (string) $value;
    }
}
