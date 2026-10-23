<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAndroidOsv
{
    public const Enum_0_0_AdGetV2DataAudienceAndroidOsv = '0.0';
    public const Enum_2_0_AdGetV2DataAudienceAndroidOsv = '2.0';
    public const Enum_7_0_AdGetV2DataAudienceAndroidOsv = '7.0';
    public const Enum_4_2_AdGetV2DataAudienceAndroidOsv = '4.2';
    public const Enum_3_0_AdGetV2DataAudienceAndroidOsv = '3.0';
    public const Enum_2_3_AdGetV2DataAudienceAndroidOsv = '2.3';
    public const Enum_10_1_AdGetV2DataAudienceAndroidOsv = '10.1';
    public const Enum_7_1_AdGetV2DataAudienceAndroidOsv = '7.1';
    public const Enum_6_0_AdGetV2DataAudienceAndroidOsv = '6.0';
    public const Enum_11_0_AdGetV2DataAudienceAndroidOsv = '11.0';
    public const Enum_4_0_AdGetV2DataAudienceAndroidOsv = '4.0';
    public const Enum_4_5_AdGetV2DataAudienceAndroidOsv = '4.5';
    public const Enum_3_2_AdGetV2DataAudienceAndroidOsv = '3.2';
    public const Enum_4_4_AdGetV2DataAudienceAndroidOsv = '4.4';
    public const Enum_2_1_AdGetV2DataAudienceAndroidOsv = '2.1';
    public const Enum_2_2_AdGetV2DataAudienceAndroidOsv = '2.2';
    public const Enum_4_3_AdGetV2DataAudienceAndroidOsv = '4.3';
    public const Enum_10_0_AdGetV2DataAudienceAndroidOsv = '10.0';
    public const Enum_5_1_AdGetV2DataAudienceAndroidOsv = '5.1';
    public const Enum_4_1_AdGetV2DataAudienceAndroidOsv = '4.1';
    public const Enum_8_0_AdGetV2DataAudienceAndroidOsv = '8.0';
    public const Enum_5_0_AdGetV2DataAudienceAndroidOsv = '5.0';
    public const Enum_9_0_AdGetV2DataAudienceAndroidOsv = '9.0';
    public const Enum_3_1_AdGetV2DataAudienceAndroidOsv = '3.1';
    public const Enum_8_1_AdGetV2DataAudienceAndroidOsv = '8.1';
    public const NONE_AdGetV2DataAudienceAndroidOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_2_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_7_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_4_2_AdGetV2DataAudienceAndroidOsv,
        self::Enum_3_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_2_3_AdGetV2DataAudienceAndroidOsv,
        self::Enum_10_1_AdGetV2DataAudienceAndroidOsv,
        self::Enum_7_1_AdGetV2DataAudienceAndroidOsv,
        self::Enum_6_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_11_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_4_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_4_5_AdGetV2DataAudienceAndroidOsv,
        self::Enum_3_2_AdGetV2DataAudienceAndroidOsv,
        self::Enum_4_4_AdGetV2DataAudienceAndroidOsv,
        self::Enum_2_1_AdGetV2DataAudienceAndroidOsv,
        self::Enum_2_2_AdGetV2DataAudienceAndroidOsv,
        self::Enum_4_3_AdGetV2DataAudienceAndroidOsv,
        self::Enum_10_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_5_1_AdGetV2DataAudienceAndroidOsv,
        self::Enum_4_1_AdGetV2DataAudienceAndroidOsv,
        self::Enum_8_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_5_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_9_0_AdGetV2DataAudienceAndroidOsv,
        self::Enum_3_1_AdGetV2DataAudienceAndroidOsv,
        self::Enum_8_1_AdGetV2DataAudienceAndroidOsv,
        self::NONE_AdGetV2DataAudienceAndroidOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAndroidOsv', $value));
        }
        return (string) $value;
    }
}
