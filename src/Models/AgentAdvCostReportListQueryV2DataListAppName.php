<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListAppName
{
    public const Enum_1_AgentAdvCostReportListQueryV2DataListAppName = 1;
    public const Enum_10_AgentAdvCostReportListQueryV2DataListAppName = 10;
    public const Enum_11_AgentAdvCostReportListQueryV2DataListAppName = 11;
    public const Enum_12_AgentAdvCostReportListQueryV2DataListAppName = 12;
    public const Enum_13_AgentAdvCostReportListQueryV2DataListAppName = 13;
    public const Enum_14_AgentAdvCostReportListQueryV2DataListAppName = 14;
    public const Enum_15_AgentAdvCostReportListQueryV2DataListAppName = 15;
    public const Enum_16_AgentAdvCostReportListQueryV2DataListAppName = 16;
    public const Enum_17_AgentAdvCostReportListQueryV2DataListAppName = 17;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListAppName = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2DataListAppName = 3;
    public const Enum_4_AgentAdvCostReportListQueryV2DataListAppName = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2DataListAppName = 5;
    public const Enum_6_AgentAdvCostReportListQueryV2DataListAppName = 6;
    public const Enum_7_AgentAdvCostReportListQueryV2DataListAppName = 7;
    public const Enum_8_AgentAdvCostReportListQueryV2DataListAppName = 8;
    public const Enum_9_AgentAdvCostReportListQueryV2DataListAppName = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_10_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_11_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_12_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_13_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_14_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_15_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_16_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_17_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_3_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_4_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_5_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_6_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_7_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_8_AgentAdvCostReportListQueryV2DataListAppName,
        self::Enum_9_AgentAdvCostReportListQueryV2DataListAppName,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListAppName', $value));
        }
        return (string) $value;
    }
}
