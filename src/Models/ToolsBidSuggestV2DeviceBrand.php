<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2DeviceBrand
{
    public const VIVO_ToolsBidSuggestV2DeviceBrand = 'VIVO';
    public const Enum_360_ToolsBidSuggestV2DeviceBrand = '360';
    public const GOOGLE_ToolsBidSuggestV2DeviceBrand = 'GOOGLE';
    public const LETV_ToolsBidSuggestV2DeviceBrand = 'LETV';
    public const HONOR_ToolsBidSuggestV2DeviceBrand = 'HONOR';
    public const HISENSE_ToolsBidSuggestV2DeviceBrand = 'HISENSE';
    public const MEIZU_ToolsBidSuggestV2DeviceBrand = 'MEIZU';
    public const APPLE_ToolsBidSuggestV2DeviceBrand = 'APPLE';
    public const OPPO_ToolsBidSuggestV2DeviceBrand = 'OPPO';
    public const GIONEE_ToolsBidSuggestV2DeviceBrand = 'GIONEE';
    public const ZTE_ToolsBidSuggestV2DeviceBrand = 'ZTE';
    public const NOKIA_ToolsBidSuggestV2DeviceBrand = 'NOKIA';
    public const HTC_ToolsBidSuggestV2DeviceBrand = 'HTC';
    public const SMARTISAN_ToolsBidSuggestV2DeviceBrand = 'SMARTISAN';
    public const CHINAMOBILE_ToolsBidSuggestV2DeviceBrand = 'CHINAMOBILE';
    public const QIKU_ToolsBidSuggestV2DeviceBrand = 'QIKU';
    public const LG_ToolsBidSuggestV2DeviceBrand = 'LG';
    public const LENOVO_ToolsBidSuggestV2DeviceBrand = 'LENOVO';
    public const MOTO_ToolsBidSuggestV2DeviceBrand = 'MOTO';
    public const HUAWEI_ToolsBidSuggestV2DeviceBrand = 'HUAWEI';
    public const SAMSUNG_ToolsBidSuggestV2DeviceBrand = 'SAMSUNG';
    public const COOLPAD_ToolsBidSuggestV2DeviceBrand = 'COOLPAD';
    public const SONY_ToolsBidSuggestV2DeviceBrand = 'SONY';
    public const TCL_ToolsBidSuggestV2DeviceBrand = 'TCL';
    public const XIAOMI_ToolsBidSuggestV2DeviceBrand = 'XIAOMI';
    public const ONEPLUS_ToolsBidSuggestV2DeviceBrand = 'ONEPLUS';
    public const NUBIA_ToolsBidSuggestV2DeviceBrand = 'NUBIA';
    public const PEPPER_ToolsBidSuggestV2DeviceBrand = 'PEPPER';

    public const ALLOWED_VALUES = [
        self::VIVO_ToolsBidSuggestV2DeviceBrand,
        self::Enum_360_ToolsBidSuggestV2DeviceBrand,
        self::GOOGLE_ToolsBidSuggestV2DeviceBrand,
        self::LETV_ToolsBidSuggestV2DeviceBrand,
        self::HONOR_ToolsBidSuggestV2DeviceBrand,
        self::HISENSE_ToolsBidSuggestV2DeviceBrand,
        self::MEIZU_ToolsBidSuggestV2DeviceBrand,
        self::APPLE_ToolsBidSuggestV2DeviceBrand,
        self::OPPO_ToolsBidSuggestV2DeviceBrand,
        self::GIONEE_ToolsBidSuggestV2DeviceBrand,
        self::ZTE_ToolsBidSuggestV2DeviceBrand,
        self::NOKIA_ToolsBidSuggestV2DeviceBrand,
        self::HTC_ToolsBidSuggestV2DeviceBrand,
        self::SMARTISAN_ToolsBidSuggestV2DeviceBrand,
        self::CHINAMOBILE_ToolsBidSuggestV2DeviceBrand,
        self::QIKU_ToolsBidSuggestV2DeviceBrand,
        self::LG_ToolsBidSuggestV2DeviceBrand,
        self::LENOVO_ToolsBidSuggestV2DeviceBrand,
        self::MOTO_ToolsBidSuggestV2DeviceBrand,
        self::HUAWEI_ToolsBidSuggestV2DeviceBrand,
        self::SAMSUNG_ToolsBidSuggestV2DeviceBrand,
        self::COOLPAD_ToolsBidSuggestV2DeviceBrand,
        self::SONY_ToolsBidSuggestV2DeviceBrand,
        self::TCL_ToolsBidSuggestV2DeviceBrand,
        self::XIAOMI_ToolsBidSuggestV2DeviceBrand,
        self::ONEPLUS_ToolsBidSuggestV2DeviceBrand,
        self::NUBIA_ToolsBidSuggestV2DeviceBrand,
        self::PEPPER_ToolsBidSuggestV2DeviceBrand,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2DeviceBrand', $value));
        }
        return (string) $value;
    }
}
