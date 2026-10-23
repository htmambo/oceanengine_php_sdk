<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceDeviceBrand
{
    public const Enum_360_StdProjectCreateV30AudienceDeviceBrand = '360';
    public const APPLE_StdProjectCreateV30AudienceDeviceBrand = 'APPLE';
    public const CHINAMOBILE_StdProjectCreateV30AudienceDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_StdProjectCreateV30AudienceDeviceBrand = 'COOLPAD';
    public const GIONEE_StdProjectCreateV30AudienceDeviceBrand = 'GIONEE';
    public const GOOGLE_StdProjectCreateV30AudienceDeviceBrand = 'GOOGLE';
    public const HISENSE_StdProjectCreateV30AudienceDeviceBrand = 'HISENSE';
    public const HONOR_StdProjectCreateV30AudienceDeviceBrand = 'HONOR';
    public const HTC_StdProjectCreateV30AudienceDeviceBrand = 'HTC';
    public const HUAWEI_StdProjectCreateV30AudienceDeviceBrand = 'HUAWEI';
    public const LENOVO_StdProjectCreateV30AudienceDeviceBrand = 'LENOVO';
    public const LETV_StdProjectCreateV30AudienceDeviceBrand = 'LETV';
    public const LG_StdProjectCreateV30AudienceDeviceBrand = 'LG';
    public const MEIZU_StdProjectCreateV30AudienceDeviceBrand = 'MEIZU';
    public const MOTO_StdProjectCreateV30AudienceDeviceBrand = 'MOTO';
    public const NOKIA_StdProjectCreateV30AudienceDeviceBrand = 'NOKIA';
    public const NUBIA_StdProjectCreateV30AudienceDeviceBrand = 'NUBIA';
    public const ONEPLUS_StdProjectCreateV30AudienceDeviceBrand = 'ONEPLUS';
    public const OPPO_StdProjectCreateV30AudienceDeviceBrand = 'OPPO';
    public const PEPPER_StdProjectCreateV30AudienceDeviceBrand = 'PEPPER';
    public const QIKU_StdProjectCreateV30AudienceDeviceBrand = 'QIKU';
    public const SAMSUNG_StdProjectCreateV30AudienceDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_StdProjectCreateV30AudienceDeviceBrand = 'SMARTISAN';
    public const SONY_StdProjectCreateV30AudienceDeviceBrand = 'SONY';
    public const TCL_StdProjectCreateV30AudienceDeviceBrand = 'TCL';
    public const VIVO_StdProjectCreateV30AudienceDeviceBrand = 'VIVO';
    public const XIAOMI_StdProjectCreateV30AudienceDeviceBrand = 'XIAOMI';
    public const ZTE_StdProjectCreateV30AudienceDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_StdProjectCreateV30AudienceDeviceBrand,
        self::APPLE_StdProjectCreateV30AudienceDeviceBrand,
        self::CHINAMOBILE_StdProjectCreateV30AudienceDeviceBrand,
        self::COOLPAD_StdProjectCreateV30AudienceDeviceBrand,
        self::GIONEE_StdProjectCreateV30AudienceDeviceBrand,
        self::GOOGLE_StdProjectCreateV30AudienceDeviceBrand,
        self::HISENSE_StdProjectCreateV30AudienceDeviceBrand,
        self::HONOR_StdProjectCreateV30AudienceDeviceBrand,
        self::HTC_StdProjectCreateV30AudienceDeviceBrand,
        self::HUAWEI_StdProjectCreateV30AudienceDeviceBrand,
        self::LENOVO_StdProjectCreateV30AudienceDeviceBrand,
        self::LETV_StdProjectCreateV30AudienceDeviceBrand,
        self::LG_StdProjectCreateV30AudienceDeviceBrand,
        self::MEIZU_StdProjectCreateV30AudienceDeviceBrand,
        self::MOTO_StdProjectCreateV30AudienceDeviceBrand,
        self::NOKIA_StdProjectCreateV30AudienceDeviceBrand,
        self::NUBIA_StdProjectCreateV30AudienceDeviceBrand,
        self::ONEPLUS_StdProjectCreateV30AudienceDeviceBrand,
        self::OPPO_StdProjectCreateV30AudienceDeviceBrand,
        self::PEPPER_StdProjectCreateV30AudienceDeviceBrand,
        self::QIKU_StdProjectCreateV30AudienceDeviceBrand,
        self::SAMSUNG_StdProjectCreateV30AudienceDeviceBrand,
        self::SMARTISAN_StdProjectCreateV30AudienceDeviceBrand,
        self::SONY_StdProjectCreateV30AudienceDeviceBrand,
        self::TCL_StdProjectCreateV30AudienceDeviceBrand,
        self::VIVO_StdProjectCreateV30AudienceDeviceBrand,
        self::XIAOMI_StdProjectCreateV30AudienceDeviceBrand,
        self::ZTE_StdProjectCreateV30AudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
