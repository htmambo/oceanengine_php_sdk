<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2DeviceBrand
{
    public const LG_AudiencePackageUpdateV2DeviceBrand = 'LG';
    public const HTC_AudiencePackageUpdateV2DeviceBrand = 'HTC';
    public const GOOGLE_AudiencePackageUpdateV2DeviceBrand = 'GOOGLE';
    public const LENOVO_AudiencePackageUpdateV2DeviceBrand = 'LENOVO';
    public const MOTO_AudiencePackageUpdateV2DeviceBrand = 'MOTO';
    public const HUAWEI_AudiencePackageUpdateV2DeviceBrand = 'HUAWEI';
    public const VIVO_AudiencePackageUpdateV2DeviceBrand = 'VIVO';
    public const ZTE_AudiencePackageUpdateV2DeviceBrand = 'ZTE';
    public const Enum_360_AudiencePackageUpdateV2DeviceBrand = '360';
    public const LETV_AudiencePackageUpdateV2DeviceBrand = 'LETV';
    public const TCL_AudiencePackageUpdateV2DeviceBrand = 'TCL';
    public const XIAOMI_AudiencePackageUpdateV2DeviceBrand = 'XIAOMI';
    public const SONY_AudiencePackageUpdateV2DeviceBrand = 'SONY';
    public const CHINAMOBILE_AudiencePackageUpdateV2DeviceBrand = 'CHINAMOBILE';
    public const APPLE_AudiencePackageUpdateV2DeviceBrand = 'APPLE';
    public const MEIZU_AudiencePackageUpdateV2DeviceBrand = 'MEIZU';
    public const GIONEE_AudiencePackageUpdateV2DeviceBrand = 'GIONEE';
    public const SAMSUNG_AudiencePackageUpdateV2DeviceBrand = 'SAMSUNG';
    public const NUBIA_AudiencePackageUpdateV2DeviceBrand = 'NUBIA';
    public const NOKIA_AudiencePackageUpdateV2DeviceBrand = 'NOKIA';
    public const ONEPLUS_AudiencePackageUpdateV2DeviceBrand = 'ONEPLUS';
    public const QIKU_AudiencePackageUpdateV2DeviceBrand = 'QIKU';
    public const HONOR_AudiencePackageUpdateV2DeviceBrand = 'HONOR';
    public const SMARTISAN_AudiencePackageUpdateV2DeviceBrand = 'SMARTISAN';
    public const OPPO_AudiencePackageUpdateV2DeviceBrand = 'OPPO';
    public const PEPPER_AudiencePackageUpdateV2DeviceBrand = 'PEPPER';
    public const HISENSE_AudiencePackageUpdateV2DeviceBrand = 'HISENSE';
    public const COOLPAD_AudiencePackageUpdateV2DeviceBrand = 'COOLPAD';

    public const ALLOWED_VALUES = [
        self::LG_AudiencePackageUpdateV2DeviceBrand,
        self::HTC_AudiencePackageUpdateV2DeviceBrand,
        self::GOOGLE_AudiencePackageUpdateV2DeviceBrand,
        self::LENOVO_AudiencePackageUpdateV2DeviceBrand,
        self::MOTO_AudiencePackageUpdateV2DeviceBrand,
        self::HUAWEI_AudiencePackageUpdateV2DeviceBrand,
        self::VIVO_AudiencePackageUpdateV2DeviceBrand,
        self::ZTE_AudiencePackageUpdateV2DeviceBrand,
        self::Enum_360_AudiencePackageUpdateV2DeviceBrand,
        self::LETV_AudiencePackageUpdateV2DeviceBrand,
        self::TCL_AudiencePackageUpdateV2DeviceBrand,
        self::XIAOMI_AudiencePackageUpdateV2DeviceBrand,
        self::SONY_AudiencePackageUpdateV2DeviceBrand,
        self::CHINAMOBILE_AudiencePackageUpdateV2DeviceBrand,
        self::APPLE_AudiencePackageUpdateV2DeviceBrand,
        self::MEIZU_AudiencePackageUpdateV2DeviceBrand,
        self::GIONEE_AudiencePackageUpdateV2DeviceBrand,
        self::SAMSUNG_AudiencePackageUpdateV2DeviceBrand,
        self::NUBIA_AudiencePackageUpdateV2DeviceBrand,
        self::NOKIA_AudiencePackageUpdateV2DeviceBrand,
        self::ONEPLUS_AudiencePackageUpdateV2DeviceBrand,
        self::QIKU_AudiencePackageUpdateV2DeviceBrand,
        self::HONOR_AudiencePackageUpdateV2DeviceBrand,
        self::SMARTISAN_AudiencePackageUpdateV2DeviceBrand,
        self::OPPO_AudiencePackageUpdateV2DeviceBrand,
        self::PEPPER_AudiencePackageUpdateV2DeviceBrand,
        self::HISENSE_AudiencePackageUpdateV2DeviceBrand,
        self::COOLPAD_AudiencePackageUpdateV2DeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2DeviceBrand', $value));
        }
        return (string) $value;
    }
}
