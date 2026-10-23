<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceDeviceBrand
{
    public const LG_AdGetV2DataAudienceDeviceBrand = 'LG';
    public const HTC_AdGetV2DataAudienceDeviceBrand = 'HTC';
    public const GOOGLE_AdGetV2DataAudienceDeviceBrand = 'GOOGLE';
    public const LENOVO_AdGetV2DataAudienceDeviceBrand = 'LENOVO';
    public const MOTO_AdGetV2DataAudienceDeviceBrand = 'MOTO';
    public const HUAWEI_AdGetV2DataAudienceDeviceBrand = 'HUAWEI';
    public const VIVO_AdGetV2DataAudienceDeviceBrand = 'VIVO';
    public const ZTE_AdGetV2DataAudienceDeviceBrand = 'ZTE';
    public const Enum_360_AdGetV2DataAudienceDeviceBrand = '360';
    public const LETV_AdGetV2DataAudienceDeviceBrand = 'LETV';
    public const TCL_AdGetV2DataAudienceDeviceBrand = 'TCL';
    public const XIAOMI_AdGetV2DataAudienceDeviceBrand = 'XIAOMI';
    public const SONY_AdGetV2DataAudienceDeviceBrand = 'SONY';
    public const CHINAMOBILE_AdGetV2DataAudienceDeviceBrand = 'CHINAMOBILE';
    public const APPLE_AdGetV2DataAudienceDeviceBrand = 'APPLE';
    public const MEIZU_AdGetV2DataAudienceDeviceBrand = 'MEIZU';
    public const GIONEE_AdGetV2DataAudienceDeviceBrand = 'GIONEE';
    public const SAMSUNG_AdGetV2DataAudienceDeviceBrand = 'SAMSUNG';
    public const NUBIA_AdGetV2DataAudienceDeviceBrand = 'NUBIA';
    public const NOKIA_AdGetV2DataAudienceDeviceBrand = 'NOKIA';
    public const ONEPLUS_AdGetV2DataAudienceDeviceBrand = 'ONEPLUS';
    public const QIKU_AdGetV2DataAudienceDeviceBrand = 'QIKU';
    public const HONOR_AdGetV2DataAudienceDeviceBrand = 'HONOR';
    public const SMARTISAN_AdGetV2DataAudienceDeviceBrand = 'SMARTISAN';
    public const OPPO_AdGetV2DataAudienceDeviceBrand = 'OPPO';
    public const PEPPER_AdGetV2DataAudienceDeviceBrand = 'PEPPER';
    public const HISENSE_AdGetV2DataAudienceDeviceBrand = 'HISENSE';
    public const COOLPAD_AdGetV2DataAudienceDeviceBrand = 'COOLPAD';

    public const ALLOWED_VALUES = [
        self::LG_AdGetV2DataAudienceDeviceBrand,
        self::HTC_AdGetV2DataAudienceDeviceBrand,
        self::GOOGLE_AdGetV2DataAudienceDeviceBrand,
        self::LENOVO_AdGetV2DataAudienceDeviceBrand,
        self::MOTO_AdGetV2DataAudienceDeviceBrand,
        self::HUAWEI_AdGetV2DataAudienceDeviceBrand,
        self::VIVO_AdGetV2DataAudienceDeviceBrand,
        self::ZTE_AdGetV2DataAudienceDeviceBrand,
        self::Enum_360_AdGetV2DataAudienceDeviceBrand,
        self::LETV_AdGetV2DataAudienceDeviceBrand,
        self::TCL_AdGetV2DataAudienceDeviceBrand,
        self::XIAOMI_AdGetV2DataAudienceDeviceBrand,
        self::SONY_AdGetV2DataAudienceDeviceBrand,
        self::CHINAMOBILE_AdGetV2DataAudienceDeviceBrand,
        self::APPLE_AdGetV2DataAudienceDeviceBrand,
        self::MEIZU_AdGetV2DataAudienceDeviceBrand,
        self::GIONEE_AdGetV2DataAudienceDeviceBrand,
        self::SAMSUNG_AdGetV2DataAudienceDeviceBrand,
        self::NUBIA_AdGetV2DataAudienceDeviceBrand,
        self::NOKIA_AdGetV2DataAudienceDeviceBrand,
        self::ONEPLUS_AdGetV2DataAudienceDeviceBrand,
        self::QIKU_AdGetV2DataAudienceDeviceBrand,
        self::HONOR_AdGetV2DataAudienceDeviceBrand,
        self::SMARTISAN_AdGetV2DataAudienceDeviceBrand,
        self::OPPO_AdGetV2DataAudienceDeviceBrand,
        self::PEPPER_AdGetV2DataAudienceDeviceBrand,
        self::HISENSE_AdGetV2DataAudienceDeviceBrand,
        self::COOLPAD_AdGetV2DataAudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
