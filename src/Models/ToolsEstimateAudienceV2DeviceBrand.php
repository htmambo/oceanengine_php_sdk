<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2DeviceBrand
{
    public const VIVO_ToolsEstimateAudienceV2DeviceBrand = 'VIVO';
    public const Enum_360_ToolsEstimateAudienceV2DeviceBrand = '360';
    public const GOOGLE_ToolsEstimateAudienceV2DeviceBrand = 'GOOGLE';
    public const LETV_ToolsEstimateAudienceV2DeviceBrand = 'LETV';
    public const HONOR_ToolsEstimateAudienceV2DeviceBrand = 'HONOR';
    public const HISENSE_ToolsEstimateAudienceV2DeviceBrand = 'HISENSE';
    public const MEIZU_ToolsEstimateAudienceV2DeviceBrand = 'MEIZU';
    public const APPLE_ToolsEstimateAudienceV2DeviceBrand = 'APPLE';
    public const OPPO_ToolsEstimateAudienceV2DeviceBrand = 'OPPO';
    public const GIONEE_ToolsEstimateAudienceV2DeviceBrand = 'GIONEE';
    public const ZTE_ToolsEstimateAudienceV2DeviceBrand = 'ZTE';
    public const NOKIA_ToolsEstimateAudienceV2DeviceBrand = 'NOKIA';
    public const HTC_ToolsEstimateAudienceV2DeviceBrand = 'HTC';
    public const SMARTISAN_ToolsEstimateAudienceV2DeviceBrand = 'SMARTISAN';
    public const CHINAMOBILE_ToolsEstimateAudienceV2DeviceBrand = 'CHINAMOBILE';
    public const QIKU_ToolsEstimateAudienceV2DeviceBrand = 'QIKU';
    public const LG_ToolsEstimateAudienceV2DeviceBrand = 'LG';
    public const LENOVO_ToolsEstimateAudienceV2DeviceBrand = 'LENOVO';
    public const MOTO_ToolsEstimateAudienceV2DeviceBrand = 'MOTO';
    public const HUAWEI_ToolsEstimateAudienceV2DeviceBrand = 'HUAWEI';
    public const SAMSUNG_ToolsEstimateAudienceV2DeviceBrand = 'SAMSUNG';
    public const COOLPAD_ToolsEstimateAudienceV2DeviceBrand = 'COOLPAD';
    public const SONY_ToolsEstimateAudienceV2DeviceBrand = 'SONY';
    public const TCL_ToolsEstimateAudienceV2DeviceBrand = 'TCL';
    public const XIAOMI_ToolsEstimateAudienceV2DeviceBrand = 'XIAOMI';
    public const ONEPLUS_ToolsEstimateAudienceV2DeviceBrand = 'ONEPLUS';
    public const NUBIA_ToolsEstimateAudienceV2DeviceBrand = 'NUBIA';
    public const PEPPER_ToolsEstimateAudienceV2DeviceBrand = 'PEPPER';

    public const ALLOWED_VALUES = [
        self::VIVO_ToolsEstimateAudienceV2DeviceBrand,
        self::Enum_360_ToolsEstimateAudienceV2DeviceBrand,
        self::GOOGLE_ToolsEstimateAudienceV2DeviceBrand,
        self::LETV_ToolsEstimateAudienceV2DeviceBrand,
        self::HONOR_ToolsEstimateAudienceV2DeviceBrand,
        self::HISENSE_ToolsEstimateAudienceV2DeviceBrand,
        self::MEIZU_ToolsEstimateAudienceV2DeviceBrand,
        self::APPLE_ToolsEstimateAudienceV2DeviceBrand,
        self::OPPO_ToolsEstimateAudienceV2DeviceBrand,
        self::GIONEE_ToolsEstimateAudienceV2DeviceBrand,
        self::ZTE_ToolsEstimateAudienceV2DeviceBrand,
        self::NOKIA_ToolsEstimateAudienceV2DeviceBrand,
        self::HTC_ToolsEstimateAudienceV2DeviceBrand,
        self::SMARTISAN_ToolsEstimateAudienceV2DeviceBrand,
        self::CHINAMOBILE_ToolsEstimateAudienceV2DeviceBrand,
        self::QIKU_ToolsEstimateAudienceV2DeviceBrand,
        self::LG_ToolsEstimateAudienceV2DeviceBrand,
        self::LENOVO_ToolsEstimateAudienceV2DeviceBrand,
        self::MOTO_ToolsEstimateAudienceV2DeviceBrand,
        self::HUAWEI_ToolsEstimateAudienceV2DeviceBrand,
        self::SAMSUNG_ToolsEstimateAudienceV2DeviceBrand,
        self::COOLPAD_ToolsEstimateAudienceV2DeviceBrand,
        self::SONY_ToolsEstimateAudienceV2DeviceBrand,
        self::TCL_ToolsEstimateAudienceV2DeviceBrand,
        self::XIAOMI_ToolsEstimateAudienceV2DeviceBrand,
        self::ONEPLUS_ToolsEstimateAudienceV2DeviceBrand,
        self::NUBIA_ToolsEstimateAudienceV2DeviceBrand,
        self::PEPPER_ToolsEstimateAudienceV2DeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2DeviceBrand', $value));
        }
        return (string) $value;
    }
}
