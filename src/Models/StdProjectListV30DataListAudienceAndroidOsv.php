<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceAndroidOsv
{
    public const Enum_0_0_StdProjectListV30DataListAudienceAndroidOsv = '0.0';
    public const Enum_10_0_StdProjectListV30DataListAudienceAndroidOsv = '10.0';
    public const Enum_10_1_StdProjectListV30DataListAudienceAndroidOsv = '10.1';
    public const Enum_11_0_StdProjectListV30DataListAudienceAndroidOsv = '11.0';
    public const Enum_2_0_StdProjectListV30DataListAudienceAndroidOsv = '2.0';
    public const Enum_2_1_StdProjectListV30DataListAudienceAndroidOsv = '2.1';
    public const Enum_2_2_StdProjectListV30DataListAudienceAndroidOsv = '2.2';
    public const Enum_2_3_StdProjectListV30DataListAudienceAndroidOsv = '2.3';
    public const Enum_3_0_StdProjectListV30DataListAudienceAndroidOsv = '3.0';
    public const Enum_3_1_StdProjectListV30DataListAudienceAndroidOsv = '3.1';
    public const Enum_3_2_StdProjectListV30DataListAudienceAndroidOsv = '3.2';
    public const Enum_4_0_StdProjectListV30DataListAudienceAndroidOsv = '4.0';
    public const Enum_4_1_StdProjectListV30DataListAudienceAndroidOsv = '4.1';
    public const Enum_4_2_StdProjectListV30DataListAudienceAndroidOsv = '4.2';
    public const Enum_4_3_StdProjectListV30DataListAudienceAndroidOsv = '4.3';
    public const Enum_4_4_StdProjectListV30DataListAudienceAndroidOsv = '4.4';
    public const Enum_4_5_StdProjectListV30DataListAudienceAndroidOsv = '4.5';
    public const Enum_5_0_StdProjectListV30DataListAudienceAndroidOsv = '5.0';
    public const Enum_5_1_StdProjectListV30DataListAudienceAndroidOsv = '5.1';
    public const Enum_6_0_StdProjectListV30DataListAudienceAndroidOsv = '6.0';
    public const Enum_7_0_StdProjectListV30DataListAudienceAndroidOsv = '7.0';
    public const Enum_7_1_StdProjectListV30DataListAudienceAndroidOsv = '7.1';
    public const Enum_8_0_StdProjectListV30DataListAudienceAndroidOsv = '8.0';
    public const Enum_8_1_StdProjectListV30DataListAudienceAndroidOsv = '8.1';
    public const Enum_9_0_StdProjectListV30DataListAudienceAndroidOsv = '9.0';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_10_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_10_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_11_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_2_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_2_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_2_2_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_2_3_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_3_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_3_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_3_2_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_4_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_4_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_4_2_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_4_3_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_4_4_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_4_5_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_5_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_5_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_6_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_7_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_7_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_8_0_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_8_1_StdProjectListV30DataListAudienceAndroidOsv,
        self::Enum_9_0_StdProjectListV30DataListAudienceAndroidOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceAndroidOsv', $value));
        }
        return (string) $value;
    }
}
