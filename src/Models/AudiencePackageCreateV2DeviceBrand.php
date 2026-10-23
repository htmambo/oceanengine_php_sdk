<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2DeviceBrand
{
    public const LG_AudiencePackageCreateV2DeviceBrand = 'LG';
    public const HTC_AudiencePackageCreateV2DeviceBrand = 'HTC';
    public const GOOGLE_AudiencePackageCreateV2DeviceBrand = 'GOOGLE';
    public const LENOVO_AudiencePackageCreateV2DeviceBrand = 'LENOVO';
    public const MOTO_AudiencePackageCreateV2DeviceBrand = 'MOTO';
    public const HUAWEI_AudiencePackageCreateV2DeviceBrand = 'HUAWEI';
    public const VIVO_AudiencePackageCreateV2DeviceBrand = 'VIVO';
    public const ZTE_AudiencePackageCreateV2DeviceBrand = 'ZTE';
    public const Enum_360_AudiencePackageCreateV2DeviceBrand = '360';
    public const LETV_AudiencePackageCreateV2DeviceBrand = 'LETV';
    public const TCL_AudiencePackageCreateV2DeviceBrand = 'TCL';
    public const XIAOMI_AudiencePackageCreateV2DeviceBrand = 'XIAOMI';
    public const SONY_AudiencePackageCreateV2DeviceBrand = 'SONY';
    public const CHINAMOBILE_AudiencePackageCreateV2DeviceBrand = 'CHINAMOBILE';
    public const APPLE_AudiencePackageCreateV2DeviceBrand = 'APPLE';
    public const MEIZU_AudiencePackageCreateV2DeviceBrand = 'MEIZU';
    public const GIONEE_AudiencePackageCreateV2DeviceBrand = 'GIONEE';
    public const SAMSUNG_AudiencePackageCreateV2DeviceBrand = 'SAMSUNG';
    public const NUBIA_AudiencePackageCreateV2DeviceBrand = 'NUBIA';
    public const NOKIA_AudiencePackageCreateV2DeviceBrand = 'NOKIA';
    public const ONEPLUS_AudiencePackageCreateV2DeviceBrand = 'ONEPLUS';
    public const QIKU_AudiencePackageCreateV2DeviceBrand = 'QIKU';
    public const HONOR_AudiencePackageCreateV2DeviceBrand = 'HONOR';
    public const SMARTISAN_AudiencePackageCreateV2DeviceBrand = 'SMARTISAN';
    public const OPPO_AudiencePackageCreateV2DeviceBrand = 'OPPO';
    public const PEPPER_AudiencePackageCreateV2DeviceBrand = 'PEPPER';
    public const HISENSE_AudiencePackageCreateV2DeviceBrand = 'HISENSE';
    public const COOLPAD_AudiencePackageCreateV2DeviceBrand = 'COOLPAD';

    public const ALLOWED_VALUES = [
        self::LG_AudiencePackageCreateV2DeviceBrand,
        self::HTC_AudiencePackageCreateV2DeviceBrand,
        self::GOOGLE_AudiencePackageCreateV2DeviceBrand,
        self::LENOVO_AudiencePackageCreateV2DeviceBrand,
        self::MOTO_AudiencePackageCreateV2DeviceBrand,
        self::HUAWEI_AudiencePackageCreateV2DeviceBrand,
        self::VIVO_AudiencePackageCreateV2DeviceBrand,
        self::ZTE_AudiencePackageCreateV2DeviceBrand,
        self::Enum_360_AudiencePackageCreateV2DeviceBrand,
        self::LETV_AudiencePackageCreateV2DeviceBrand,
        self::TCL_AudiencePackageCreateV2DeviceBrand,
        self::XIAOMI_AudiencePackageCreateV2DeviceBrand,
        self::SONY_AudiencePackageCreateV2DeviceBrand,
        self::CHINAMOBILE_AudiencePackageCreateV2DeviceBrand,
        self::APPLE_AudiencePackageCreateV2DeviceBrand,
        self::MEIZU_AudiencePackageCreateV2DeviceBrand,
        self::GIONEE_AudiencePackageCreateV2DeviceBrand,
        self::SAMSUNG_AudiencePackageCreateV2DeviceBrand,
        self::NUBIA_AudiencePackageCreateV2DeviceBrand,
        self::NOKIA_AudiencePackageCreateV2DeviceBrand,
        self::ONEPLUS_AudiencePackageCreateV2DeviceBrand,
        self::QIKU_AudiencePackageCreateV2DeviceBrand,
        self::HONOR_AudiencePackageCreateV2DeviceBrand,
        self::SMARTISAN_AudiencePackageCreateV2DeviceBrand,
        self::OPPO_AudiencePackageCreateV2DeviceBrand,
        self::PEPPER_AudiencePackageCreateV2DeviceBrand,
        self::HISENSE_AudiencePackageCreateV2DeviceBrand,
        self::COOLPAD_AudiencePackageCreateV2DeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2DeviceBrand', $value));
        }
        return (string) $value;
    }
}
