<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceDeviceBrand
{
    public const Enum_360_ProjectCreateV30AudienceDeviceBrand = '360';
    public const APPLE_ProjectCreateV30AudienceDeviceBrand = 'APPLE';
    public const CHINAMOBILE_ProjectCreateV30AudienceDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_ProjectCreateV30AudienceDeviceBrand = 'COOLPAD';
    public const GIONEE_ProjectCreateV30AudienceDeviceBrand = 'GIONEE';
    public const GOOGLE_ProjectCreateV30AudienceDeviceBrand = 'GOOGLE';
    public const HISENSE_ProjectCreateV30AudienceDeviceBrand = 'HISENSE';
    public const HONOR_ProjectCreateV30AudienceDeviceBrand = 'HONOR';
    public const HTC_ProjectCreateV30AudienceDeviceBrand = 'HTC';
    public const HUAWEI_ProjectCreateV30AudienceDeviceBrand = 'HUAWEI';
    public const LENOVO_ProjectCreateV30AudienceDeviceBrand = 'LENOVO';
    public const LETV_ProjectCreateV30AudienceDeviceBrand = 'LETV';
    public const LG_ProjectCreateV30AudienceDeviceBrand = 'LG';
    public const MEIZU_ProjectCreateV30AudienceDeviceBrand = 'MEIZU';
    public const MOTO_ProjectCreateV30AudienceDeviceBrand = 'MOTO';
    public const NOKIA_ProjectCreateV30AudienceDeviceBrand = 'NOKIA';
    public const NUBIA_ProjectCreateV30AudienceDeviceBrand = 'NUBIA';
    public const ONEPLUS_ProjectCreateV30AudienceDeviceBrand = 'ONEPLUS';
    public const OPPO_ProjectCreateV30AudienceDeviceBrand = 'OPPO';
    public const PEPPER_ProjectCreateV30AudienceDeviceBrand = 'PEPPER';
    public const QIKU_ProjectCreateV30AudienceDeviceBrand = 'QIKU';
    public const SAMSUNG_ProjectCreateV30AudienceDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_ProjectCreateV30AudienceDeviceBrand = 'SMARTISAN';
    public const SONY_ProjectCreateV30AudienceDeviceBrand = 'SONY';
    public const TCL_ProjectCreateV30AudienceDeviceBrand = 'TCL';
    public const VIVO_ProjectCreateV30AudienceDeviceBrand = 'VIVO';
    public const XIAOMI_ProjectCreateV30AudienceDeviceBrand = 'XIAOMI';
    public const ZTE_ProjectCreateV30AudienceDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_ProjectCreateV30AudienceDeviceBrand,
        self::APPLE_ProjectCreateV30AudienceDeviceBrand,
        self::CHINAMOBILE_ProjectCreateV30AudienceDeviceBrand,
        self::COOLPAD_ProjectCreateV30AudienceDeviceBrand,
        self::GIONEE_ProjectCreateV30AudienceDeviceBrand,
        self::GOOGLE_ProjectCreateV30AudienceDeviceBrand,
        self::HISENSE_ProjectCreateV30AudienceDeviceBrand,
        self::HONOR_ProjectCreateV30AudienceDeviceBrand,
        self::HTC_ProjectCreateV30AudienceDeviceBrand,
        self::HUAWEI_ProjectCreateV30AudienceDeviceBrand,
        self::LENOVO_ProjectCreateV30AudienceDeviceBrand,
        self::LETV_ProjectCreateV30AudienceDeviceBrand,
        self::LG_ProjectCreateV30AudienceDeviceBrand,
        self::MEIZU_ProjectCreateV30AudienceDeviceBrand,
        self::MOTO_ProjectCreateV30AudienceDeviceBrand,
        self::NOKIA_ProjectCreateV30AudienceDeviceBrand,
        self::NUBIA_ProjectCreateV30AudienceDeviceBrand,
        self::ONEPLUS_ProjectCreateV30AudienceDeviceBrand,
        self::OPPO_ProjectCreateV30AudienceDeviceBrand,
        self::PEPPER_ProjectCreateV30AudienceDeviceBrand,
        self::QIKU_ProjectCreateV30AudienceDeviceBrand,
        self::SAMSUNG_ProjectCreateV30AudienceDeviceBrand,
        self::SMARTISAN_ProjectCreateV30AudienceDeviceBrand,
        self::SONY_ProjectCreateV30AudienceDeviceBrand,
        self::TCL_ProjectCreateV30AudienceDeviceBrand,
        self::VIVO_ProjectCreateV30AudienceDeviceBrand,
        self::XIAOMI_ProjectCreateV30AudienceDeviceBrand,
        self::ZTE_ProjectCreateV30AudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
