<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceAndroidOsv
{
    public const Enum_0_0_StdProjectUpdateV30AudienceAndroidOsv = '0.0';
    public const Enum_10_0_StdProjectUpdateV30AudienceAndroidOsv = '10.0';
    public const Enum_10_1_StdProjectUpdateV30AudienceAndroidOsv = '10.1';
    public const Enum_11_0_StdProjectUpdateV30AudienceAndroidOsv = '11.0';
    public const Enum_2_0_StdProjectUpdateV30AudienceAndroidOsv = '2.0';
    public const Enum_2_1_StdProjectUpdateV30AudienceAndroidOsv = '2.1';
    public const Enum_2_2_StdProjectUpdateV30AudienceAndroidOsv = '2.2';
    public const Enum_2_3_StdProjectUpdateV30AudienceAndroidOsv = '2.3';
    public const Enum_3_0_StdProjectUpdateV30AudienceAndroidOsv = '3.0';
    public const Enum_3_1_StdProjectUpdateV30AudienceAndroidOsv = '3.1';
    public const Enum_3_2_StdProjectUpdateV30AudienceAndroidOsv = '3.2';
    public const Enum_4_0_StdProjectUpdateV30AudienceAndroidOsv = '4.0';
    public const Enum_4_1_StdProjectUpdateV30AudienceAndroidOsv = '4.1';
    public const Enum_4_2_StdProjectUpdateV30AudienceAndroidOsv = '4.2';
    public const Enum_4_3_StdProjectUpdateV30AudienceAndroidOsv = '4.3';
    public const Enum_4_4_StdProjectUpdateV30AudienceAndroidOsv = '4.4';
    public const Enum_4_5_StdProjectUpdateV30AudienceAndroidOsv = '4.5';
    public const Enum_5_0_StdProjectUpdateV30AudienceAndroidOsv = '5.0';
    public const Enum_5_1_StdProjectUpdateV30AudienceAndroidOsv = '5.1';
    public const Enum_6_0_StdProjectUpdateV30AudienceAndroidOsv = '6.0';
    public const Enum_7_0_StdProjectUpdateV30AudienceAndroidOsv = '7.0';
    public const Enum_7_1_StdProjectUpdateV30AudienceAndroidOsv = '7.1';
    public const Enum_8_0_StdProjectUpdateV30AudienceAndroidOsv = '8.0';
    public const Enum_8_1_StdProjectUpdateV30AudienceAndroidOsv = '8.1';
    public const Enum_9_0_StdProjectUpdateV30AudienceAndroidOsv = '9.0';
    public const NONE_StdProjectUpdateV30AudienceAndroidOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_10_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_10_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_11_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_2_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_2_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_2_2_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_2_3_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_3_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_3_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_3_2_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_4_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_4_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_4_2_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_4_3_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_4_4_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_4_5_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_5_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_5_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_6_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_7_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_7_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_8_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_8_1_StdProjectUpdateV30AudienceAndroidOsv,
        self::Enum_9_0_StdProjectUpdateV30AudienceAndroidOsv,
        self::NONE_StdProjectUpdateV30AudienceAndroidOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceAndroidOsv', $value));
        }
        return (string) $value;
    }
}
