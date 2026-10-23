<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceDeviceBrand
{
    public const Enum_360_ProjectListV30DataListAudienceDeviceBrand = '360';
    public const APPLE_ProjectListV30DataListAudienceDeviceBrand = 'APPLE';
    public const CHINAMOBILE_ProjectListV30DataListAudienceDeviceBrand = 'CHINAMOBILE';
    public const COOLPAD_ProjectListV30DataListAudienceDeviceBrand = 'COOLPAD';
    public const GIONEE_ProjectListV30DataListAudienceDeviceBrand = 'GIONEE';
    public const GOOGLE_ProjectListV30DataListAudienceDeviceBrand = 'GOOGLE';
    public const HISENSE_ProjectListV30DataListAudienceDeviceBrand = 'HISENSE';
    public const HONOR_ProjectListV30DataListAudienceDeviceBrand = 'HONOR';
    public const HTC_ProjectListV30DataListAudienceDeviceBrand = 'HTC';
    public const HUAWEI_ProjectListV30DataListAudienceDeviceBrand = 'HUAWEI';
    public const LENOVO_ProjectListV30DataListAudienceDeviceBrand = 'LENOVO';
    public const LETV_ProjectListV30DataListAudienceDeviceBrand = 'LETV';
    public const LG_ProjectListV30DataListAudienceDeviceBrand = 'LG';
    public const MEIZU_ProjectListV30DataListAudienceDeviceBrand = 'MEIZU';
    public const MOTO_ProjectListV30DataListAudienceDeviceBrand = 'MOTO';
    public const NOKIA_ProjectListV30DataListAudienceDeviceBrand = 'NOKIA';
    public const NUBIA_ProjectListV30DataListAudienceDeviceBrand = 'NUBIA';
    public const ONEPLUS_ProjectListV30DataListAudienceDeviceBrand = 'ONEPLUS';
    public const OPPO_ProjectListV30DataListAudienceDeviceBrand = 'OPPO';
    public const PEPPER_ProjectListV30DataListAudienceDeviceBrand = 'PEPPER';
    public const QIKU_ProjectListV30DataListAudienceDeviceBrand = 'QIKU';
    public const SAMSUNG_ProjectListV30DataListAudienceDeviceBrand = 'SAMSUNG';
    public const SMARTISAN_ProjectListV30DataListAudienceDeviceBrand = 'SMARTISAN';
    public const SONY_ProjectListV30DataListAudienceDeviceBrand = 'SONY';
    public const TCL_ProjectListV30DataListAudienceDeviceBrand = 'TCL';
    public const VIVO_ProjectListV30DataListAudienceDeviceBrand = 'VIVO';
    public const XIAOMI_ProjectListV30DataListAudienceDeviceBrand = 'XIAOMI';
    public const ZTE_ProjectListV30DataListAudienceDeviceBrand = 'ZTE';

    public const ALLOWED_VALUES = [
        self::Enum_360_ProjectListV30DataListAudienceDeviceBrand,
        self::APPLE_ProjectListV30DataListAudienceDeviceBrand,
        self::CHINAMOBILE_ProjectListV30DataListAudienceDeviceBrand,
        self::COOLPAD_ProjectListV30DataListAudienceDeviceBrand,
        self::GIONEE_ProjectListV30DataListAudienceDeviceBrand,
        self::GOOGLE_ProjectListV30DataListAudienceDeviceBrand,
        self::HISENSE_ProjectListV30DataListAudienceDeviceBrand,
        self::HONOR_ProjectListV30DataListAudienceDeviceBrand,
        self::HTC_ProjectListV30DataListAudienceDeviceBrand,
        self::HUAWEI_ProjectListV30DataListAudienceDeviceBrand,
        self::LENOVO_ProjectListV30DataListAudienceDeviceBrand,
        self::LETV_ProjectListV30DataListAudienceDeviceBrand,
        self::LG_ProjectListV30DataListAudienceDeviceBrand,
        self::MEIZU_ProjectListV30DataListAudienceDeviceBrand,
        self::MOTO_ProjectListV30DataListAudienceDeviceBrand,
        self::NOKIA_ProjectListV30DataListAudienceDeviceBrand,
        self::NUBIA_ProjectListV30DataListAudienceDeviceBrand,
        self::ONEPLUS_ProjectListV30DataListAudienceDeviceBrand,
        self::OPPO_ProjectListV30DataListAudienceDeviceBrand,
        self::PEPPER_ProjectListV30DataListAudienceDeviceBrand,
        self::QIKU_ProjectListV30DataListAudienceDeviceBrand,
        self::SAMSUNG_ProjectListV30DataListAudienceDeviceBrand,
        self::SMARTISAN_ProjectListV30DataListAudienceDeviceBrand,
        self::SONY_ProjectListV30DataListAudienceDeviceBrand,
        self::TCL_ProjectListV30DataListAudienceDeviceBrand,
        self::VIVO_ProjectListV30DataListAudienceDeviceBrand,
        self::XIAOMI_ProjectListV30DataListAudienceDeviceBrand,
        self::ZTE_ProjectListV30DataListAudienceDeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceDeviceBrand', $value));
        }
        return (string) $value;
    }
}
