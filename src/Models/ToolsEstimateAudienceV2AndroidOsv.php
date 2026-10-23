<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2AndroidOsv
{
    public const Enum_0_0_ToolsEstimateAudienceV2AndroidOsv = '0.0';
    public const Enum_2_0_ToolsEstimateAudienceV2AndroidOsv = '2.0';
    public const Enum_7_0_ToolsEstimateAudienceV2AndroidOsv = '7.0';
    public const Enum_4_2_ToolsEstimateAudienceV2AndroidOsv = '4.2';
    public const Enum_3_0_ToolsEstimateAudienceV2AndroidOsv = '3.0';
    public const Enum_2_3_ToolsEstimateAudienceV2AndroidOsv = '2.3';
    public const Enum_10_1_ToolsEstimateAudienceV2AndroidOsv = '10.1';
    public const Enum_7_1_ToolsEstimateAudienceV2AndroidOsv = '7.1';
    public const Enum_6_0_ToolsEstimateAudienceV2AndroidOsv = '6.0';
    public const Enum_11_0_ToolsEstimateAudienceV2AndroidOsv = '11.0';
    public const Enum_4_0_ToolsEstimateAudienceV2AndroidOsv = '4.0';
    public const Enum_4_5_ToolsEstimateAudienceV2AndroidOsv = '4.5';
    public const Enum_3_2_ToolsEstimateAudienceV2AndroidOsv = '3.2';
    public const Enum_4_4_ToolsEstimateAudienceV2AndroidOsv = '4.4';
    public const Enum_2_1_ToolsEstimateAudienceV2AndroidOsv = '2.1';
    public const Enum_2_2_ToolsEstimateAudienceV2AndroidOsv = '2.2';
    public const Enum_4_3_ToolsEstimateAudienceV2AndroidOsv = '4.3';
    public const Enum_10_0_ToolsEstimateAudienceV2AndroidOsv = '10.0';
    public const Enum_5_1_ToolsEstimateAudienceV2AndroidOsv = '5.1';
    public const Enum_4_1_ToolsEstimateAudienceV2AndroidOsv = '4.1';
    public const Enum_8_0_ToolsEstimateAudienceV2AndroidOsv = '8.0';
    public const Enum_5_0_ToolsEstimateAudienceV2AndroidOsv = '5.0';
    public const Enum_9_0_ToolsEstimateAudienceV2AndroidOsv = '9.0';
    public const Enum_3_1_ToolsEstimateAudienceV2AndroidOsv = '3.1';
    public const Enum_8_1_ToolsEstimateAudienceV2AndroidOsv = '8.1';
    public const NONE_ToolsEstimateAudienceV2AndroidOsv = 'NONE';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_2_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_7_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_4_2_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_3_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_2_3_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_10_1_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_7_1_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_6_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_11_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_4_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_4_5_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_3_2_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_4_4_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_2_1_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_2_2_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_4_3_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_10_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_5_1_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_4_1_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_8_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_5_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_9_0_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_3_1_ToolsEstimateAudienceV2AndroidOsv,
        self::Enum_8_1_ToolsEstimateAudienceV2AndroidOsv,
        self::NONE_ToolsEstimateAudienceV2AndroidOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2AndroidOsv', $value));
        }
        return (string) $value;
    }
}
