<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceDeviceBrand
{
    public const Enum_360_ProjectUpdateV30AudienceDeviceBrand = '360';
    public const APPLE_ProjectUpdateV30AudienceDeviceBrand = 'APPLE';
    public const CHINAMOBILE_ProjectUpdateV30AudienceDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_ProjectUpdateV30AudienceDeviceBrand = 'COOLPAD';
    public const GIONEE_ProjectUpdateV30AudienceDeviceBrand = 'GIONEE';
    public const GOOGLE_ProjectUpdateV30AudienceDeviceBrand = 'GOOGLE';
    public const HISENSE_ProjectUpdateV30AudienceDeviceBrand = 'HISENSE';
    public const HONOR_ProjectUpdateV30AudienceDeviceBrand = 'HONOR';
    public const HTC_ProjectUpdateV30AudienceDeviceBrand = 'HTC';
    public const HUAWEI_ProjectUpdateV30AudienceDeviceBrand = 'HUAWEI';
    public const LENOVO_ProjectUpdateV30AudienceDeviceBrand = 'LENOVO';
    public const LETV_ProjectUpdateV30AudienceDeviceBrand = 'LETV';
    public const LG_ProjectUpdateV30AudienceDeviceBrand = 'LG';
    public const MEIZU_ProjectUpdateV30AudienceDeviceBrand = 'MEIZU';
    public const MOTO_ProjectUpdateV30AudienceDeviceBrand = 'MOTO';
    public const NOKIA_ProjectUpdateV30AudienceDeviceBrand = 'NOKIA';
    public const NUBIA_ProjectUpdateV30AudienceDeviceBrand = 'NUBIA';
    public const ONEPLUS_ProjectUpdateV30AudienceDeviceBrand = 'ONEPLUS';
    public const OPPO_ProjectUpdateV30AudienceDeviceBrand = 'OPPO';
    public const PEPPER_ProjectUpdateV30AudienceDeviceBrand = 'PEPPER';
    public const QIKU_ProjectUpdateV30AudienceDeviceBrand = 'QIKU';
    public const SAMSUNG_ProjectUpdateV30AudienceDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_ProjectUpdateV30AudienceDeviceBrand = 'SMARTISAN';
    public const SONY_ProjectUpdateV30AudienceDeviceBrand = 'SONY';
    public const TCL_ProjectUpdateV30AudienceDeviceBrand = 'TCL';
    public const VIVO_ProjectUpdateV30AudienceDeviceBrand = 'VIVO';
    public const XIAOMI_ProjectUpdateV30AudienceDeviceBrand = 'XIAOMI';
    public const ZTE_ProjectUpdateV30AudienceDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_ProjectUpdateV30AudienceDeviceBrand,
        self::APPLE_ProjectUpdateV30AudienceDeviceBrand,
        self::CHINAMOBILE_ProjectUpdateV30AudienceDeviceBrand,
        self::COOLPAD_ProjectUpdateV30AudienceDeviceBrand,
        self::GIONEE_ProjectUpdateV30AudienceDeviceBrand,
        self::GOOGLE_ProjectUpdateV30AudienceDeviceBrand,
        self::HISENSE_ProjectUpdateV30AudienceDeviceBrand,
        self::HONOR_ProjectUpdateV30AudienceDeviceBrand,
        self::HTC_ProjectUpdateV30AudienceDeviceBrand,
        self::HUAWEI_ProjectUpdateV30AudienceDeviceBrand,
        self::LENOVO_ProjectUpdateV30AudienceDeviceBrand,
        self::LETV_ProjectUpdateV30AudienceDeviceBrand,
        self::LG_ProjectUpdateV30AudienceDeviceBrand,
        self::MEIZU_ProjectUpdateV30AudienceDeviceBrand,
        self::MOTO_ProjectUpdateV30AudienceDeviceBrand,
        self::NOKIA_ProjectUpdateV30AudienceDeviceBrand,
        self::NUBIA_ProjectUpdateV30AudienceDeviceBrand,
        self::ONEPLUS_ProjectUpdateV30AudienceDeviceBrand,
        self::OPPO_ProjectUpdateV30AudienceDeviceBrand,
        self::PEPPER_ProjectUpdateV30AudienceDeviceBrand,
        self::QIKU_ProjectUpdateV30AudienceDeviceBrand,
        self::SAMSUNG_ProjectUpdateV30AudienceDeviceBrand,
        self::SMARTISAN_ProjectUpdateV30AudienceDeviceBrand,
        self::SONY_ProjectUpdateV30AudienceDeviceBrand,
        self::TCL_ProjectUpdateV30AudienceDeviceBrand,
        self::VIVO_ProjectUpdateV30AudienceDeviceBrand,
        self::XIAOMI_ProjectUpdateV30AudienceDeviceBrand,
        self::ZTE_ProjectUpdateV30AudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
