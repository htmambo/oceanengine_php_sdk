<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceDeviceBrand
{
    public const Enum_360_StdProjectListV30DataListAudienceDeviceBrand = '360';
    public const APPLE_StdProjectListV30DataListAudienceDeviceBrand = 'APPLE';
    public const CHINAMOBILE_StdProjectListV30DataListAudienceDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_StdProjectListV30DataListAudienceDeviceBrand = 'COOLPAD';
    public const GIONEE_StdProjectListV30DataListAudienceDeviceBrand = 'GIONEE';
    public const GOOGLE_StdProjectListV30DataListAudienceDeviceBrand = 'GOOGLE';
    public const HISENSE_StdProjectListV30DataListAudienceDeviceBrand = 'HISENSE';
    public const HONOR_StdProjectListV30DataListAudienceDeviceBrand = 'HONOR';
    public const HTC_StdProjectListV30DataListAudienceDeviceBrand = 'HTC';
    public const HUAWEI_StdProjectListV30DataListAudienceDeviceBrand = 'HUAWEI';
    public const LENOVO_StdProjectListV30DataListAudienceDeviceBrand = 'LENOVO';
    public const LETV_StdProjectListV30DataListAudienceDeviceBrand = 'LETV';
    public const LG_StdProjectListV30DataListAudienceDeviceBrand = 'LG';
    public const MEIZU_StdProjectListV30DataListAudienceDeviceBrand = 'MEIZU';
    public const MOTO_StdProjectListV30DataListAudienceDeviceBrand = 'MOTO';
    public const NOKIA_StdProjectListV30DataListAudienceDeviceBrand = 'NOKIA';
    public const NUBIA_StdProjectListV30DataListAudienceDeviceBrand = 'NUBIA';
    public const ONEPLUS_StdProjectListV30DataListAudienceDeviceBrand = 'ONEPLUS';
    public const OPPO_StdProjectListV30DataListAudienceDeviceBrand = 'OPPO';
    public const PEPPER_StdProjectListV30DataListAudienceDeviceBrand = 'PEPPER';
    public const QIKU_StdProjectListV30DataListAudienceDeviceBrand = 'QIKU';
    public const SAMSUNG_StdProjectListV30DataListAudienceDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_StdProjectListV30DataListAudienceDeviceBrand = 'SMARTISAN';
    public const SONY_StdProjectListV30DataListAudienceDeviceBrand = 'SONY';
    public const TCL_StdProjectListV30DataListAudienceDeviceBrand = 'TCL';
    public const VIVO_StdProjectListV30DataListAudienceDeviceBrand = 'VIVO';
    public const XIAOMI_StdProjectListV30DataListAudienceDeviceBrand = 'XIAOMI';
    public const ZTE_StdProjectListV30DataListAudienceDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_StdProjectListV30DataListAudienceDeviceBrand,
        self::APPLE_StdProjectListV30DataListAudienceDeviceBrand,
        self::CHINAMOBILE_StdProjectListV30DataListAudienceDeviceBrand,
        self::COOLPAD_StdProjectListV30DataListAudienceDeviceBrand,
        self::GIONEE_StdProjectListV30DataListAudienceDeviceBrand,
        self::GOOGLE_StdProjectListV30DataListAudienceDeviceBrand,
        self::HISENSE_StdProjectListV30DataListAudienceDeviceBrand,
        self::HONOR_StdProjectListV30DataListAudienceDeviceBrand,
        self::HTC_StdProjectListV30DataListAudienceDeviceBrand,
        self::HUAWEI_StdProjectListV30DataListAudienceDeviceBrand,
        self::LENOVO_StdProjectListV30DataListAudienceDeviceBrand,
        self::LETV_StdProjectListV30DataListAudienceDeviceBrand,
        self::LG_StdProjectListV30DataListAudienceDeviceBrand,
        self::MEIZU_StdProjectListV30DataListAudienceDeviceBrand,
        self::MOTO_StdProjectListV30DataListAudienceDeviceBrand,
        self::NOKIA_StdProjectListV30DataListAudienceDeviceBrand,
        self::NUBIA_StdProjectListV30DataListAudienceDeviceBrand,
        self::ONEPLUS_StdProjectListV30DataListAudienceDeviceBrand,
        self::OPPO_StdProjectListV30DataListAudienceDeviceBrand,
        self::PEPPER_StdProjectListV30DataListAudienceDeviceBrand,
        self::QIKU_StdProjectListV30DataListAudienceDeviceBrand,
        self::SAMSUNG_StdProjectListV30DataListAudienceDeviceBrand,
        self::SMARTISAN_StdProjectListV30DataListAudienceDeviceBrand,
        self::SONY_StdProjectListV30DataListAudienceDeviceBrand,
        self::TCL_StdProjectListV30DataListAudienceDeviceBrand,
        self::VIVO_StdProjectListV30DataListAudienceDeviceBrand,
        self::XIAOMI_StdProjectListV30DataListAudienceDeviceBrand,
        self::ZTE_StdProjectListV30DataListAudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
