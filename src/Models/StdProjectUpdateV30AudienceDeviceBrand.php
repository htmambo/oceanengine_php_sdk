<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceDeviceBrand
{
    public const Enum_360_StdProjectUpdateV30AudienceDeviceBrand = '360';
    public const APPLE_StdProjectUpdateV30AudienceDeviceBrand = 'APPLE';
    public const CHINAMOBILE_StdProjectUpdateV30AudienceDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_StdProjectUpdateV30AudienceDeviceBrand = 'COOLPAD';
    public const GIONEE_StdProjectUpdateV30AudienceDeviceBrand = 'GIONEE';
    public const GOOGLE_StdProjectUpdateV30AudienceDeviceBrand = 'GOOGLE';
    public const HISENSE_StdProjectUpdateV30AudienceDeviceBrand = 'HISENSE';
    public const HONOR_StdProjectUpdateV30AudienceDeviceBrand = 'HONOR';
    public const HTC_StdProjectUpdateV30AudienceDeviceBrand = 'HTC';
    public const HUAWEI_StdProjectUpdateV30AudienceDeviceBrand = 'HUAWEI';
    public const LENOVO_StdProjectUpdateV30AudienceDeviceBrand = 'LENOVO';
    public const LETV_StdProjectUpdateV30AudienceDeviceBrand = 'LETV';
    public const LG_StdProjectUpdateV30AudienceDeviceBrand = 'LG';
    public const MEIZU_StdProjectUpdateV30AudienceDeviceBrand = 'MEIZU';
    public const MOTO_StdProjectUpdateV30AudienceDeviceBrand = 'MOTO';
    public const NOKIA_StdProjectUpdateV30AudienceDeviceBrand = 'NOKIA';
    public const NUBIA_StdProjectUpdateV30AudienceDeviceBrand = 'NUBIA';
    public const ONEPLUS_StdProjectUpdateV30AudienceDeviceBrand = 'ONEPLUS';
    public const OPPO_StdProjectUpdateV30AudienceDeviceBrand = 'OPPO';
    public const PEPPER_StdProjectUpdateV30AudienceDeviceBrand = 'PEPPER';
    public const QIKU_StdProjectUpdateV30AudienceDeviceBrand = 'QIKU';
    public const SAMSUNG_StdProjectUpdateV30AudienceDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_StdProjectUpdateV30AudienceDeviceBrand = 'SMARTISAN';
    public const SONY_StdProjectUpdateV30AudienceDeviceBrand = 'SONY';
    public const TCL_StdProjectUpdateV30AudienceDeviceBrand = 'TCL';
    public const VIVO_StdProjectUpdateV30AudienceDeviceBrand = 'VIVO';
    public const XIAOMI_StdProjectUpdateV30AudienceDeviceBrand = 'XIAOMI';
    public const ZTE_StdProjectUpdateV30AudienceDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_StdProjectUpdateV30AudienceDeviceBrand,
        self::APPLE_StdProjectUpdateV30AudienceDeviceBrand,
        self::CHINAMOBILE_StdProjectUpdateV30AudienceDeviceBrand,
        self::COOLPAD_StdProjectUpdateV30AudienceDeviceBrand,
        self::GIONEE_StdProjectUpdateV30AudienceDeviceBrand,
        self::GOOGLE_StdProjectUpdateV30AudienceDeviceBrand,
        self::HISENSE_StdProjectUpdateV30AudienceDeviceBrand,
        self::HONOR_StdProjectUpdateV30AudienceDeviceBrand,
        self::HTC_StdProjectUpdateV30AudienceDeviceBrand,
        self::HUAWEI_StdProjectUpdateV30AudienceDeviceBrand,
        self::LENOVO_StdProjectUpdateV30AudienceDeviceBrand,
        self::LETV_StdProjectUpdateV30AudienceDeviceBrand,
        self::LG_StdProjectUpdateV30AudienceDeviceBrand,
        self::MEIZU_StdProjectUpdateV30AudienceDeviceBrand,
        self::MOTO_StdProjectUpdateV30AudienceDeviceBrand,
        self::NOKIA_StdProjectUpdateV30AudienceDeviceBrand,
        self::NUBIA_StdProjectUpdateV30AudienceDeviceBrand,
        self::ONEPLUS_StdProjectUpdateV30AudienceDeviceBrand,
        self::OPPO_StdProjectUpdateV30AudienceDeviceBrand,
        self::PEPPER_StdProjectUpdateV30AudienceDeviceBrand,
        self::QIKU_StdProjectUpdateV30AudienceDeviceBrand,
        self::SAMSUNG_StdProjectUpdateV30AudienceDeviceBrand,
        self::SMARTISAN_StdProjectUpdateV30AudienceDeviceBrand,
        self::SONY_StdProjectUpdateV30AudienceDeviceBrand,
        self::TCL_StdProjectUpdateV30AudienceDeviceBrand,
        self::VIVO_StdProjectUpdateV30AudienceDeviceBrand,
        self::XIAOMI_StdProjectUpdateV30AudienceDeviceBrand,
        self::ZTE_StdProjectUpdateV30AudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
