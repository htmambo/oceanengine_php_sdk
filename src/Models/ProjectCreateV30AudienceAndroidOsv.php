<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceAndroidOsv
{
    public const Enum_0_0_ProjectCreateV30AudienceAndroidOsv = '0.0';
    public const Enum_10_0_ProjectCreateV30AudienceAndroidOsv = '10.0';
    public const Enum_10_1_ProjectCreateV30AudienceAndroidOsv = '10.1';
    public const Enum_11_0_ProjectCreateV30AudienceAndroidOsv = '11.0';
    public const Enum_2_0_ProjectCreateV30AudienceAndroidOsv = '2.0';
    public const Enum_2_1_ProjectCreateV30AudienceAndroidOsv = '2.1';
    public const Enum_2_2_ProjectCreateV30AudienceAndroidOsv = '2.2';
    public const Enum_2_3_ProjectCreateV30AudienceAndroidOsv = '2.3';
    public const Enum_3_0_ProjectCreateV30AudienceAndroidOsv = '3.0';
    public const Enum_3_1_ProjectCreateV30AudienceAndroidOsv = '3.1';
    public const Enum_3_2_ProjectCreateV30AudienceAndroidOsv = '3.2';
    public const Enum_4_0_ProjectCreateV30AudienceAndroidOsv = '4.0';
    public const Enum_4_1_ProjectCreateV30AudienceAndroidOsv = '4.1';
    public const Enum_4_2_ProjectCreateV30AudienceAndroidOsv = '4.2';
    public const Enum_4_3_ProjectCreateV30AudienceAndroidOsv = '4.3';
    public const Enum_4_4_ProjectCreateV30AudienceAndroidOsv = '4.4';
    public const Enum_4_5_ProjectCreateV30AudienceAndroidOsv = '4.5';
    public const Enum_5_0_ProjectCreateV30AudienceAndroidOsv = '5.0';
    public const Enum_5_1_ProjectCreateV30AudienceAndroidOsv = '5.1';
    public const Enum_6_0_ProjectCreateV30AudienceAndroidOsv = '6.0';
    public const Enum_7_0_ProjectCreateV30AudienceAndroidOsv = '7.0';
    public const Enum_7_1_ProjectCreateV30AudienceAndroidOsv = '7.1';
    public const Enum_8_0_ProjectCreateV30AudienceAndroidOsv = '8.0';
    public const Enum_8_1_ProjectCreateV30AudienceAndroidOsv = '8.1';
    public const Enum_9_0_ProjectCreateV30AudienceAndroidOsv = '9.0';
    public const NONE_ProjectCreateV30AudienceAndroidOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_10_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_10_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_11_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_2_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_2_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_2_2_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_2_3_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_3_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_3_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_3_2_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_4_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_4_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_4_2_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_4_3_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_4_4_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_4_5_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_5_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_5_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_6_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_7_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_7_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_8_0_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_8_1_ProjectCreateV30AudienceAndroidOsv,
        self::Enum_9_0_ProjectCreateV30AudienceAndroidOsv,
        self::NONE_ProjectCreateV30AudienceAndroidOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceAndroidOsv', $value));
        }
        return (string) $value;
    }
}
