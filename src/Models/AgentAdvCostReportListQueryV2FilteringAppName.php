<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2FilteringAppName
{
    public const Enum_1_AgentAdvCostReportListQueryV2FilteringAppName = 1;
    public const Enum_10_AgentAdvCostReportListQueryV2FilteringAppName = 10;
    public const Enum_11_AgentAdvCostReportListQueryV2FilteringAppName = 11;
    public const Enum_12_AgentAdvCostReportListQueryV2FilteringAppName = 12;
    public const Enum_13_AgentAdvCostReportListQueryV2FilteringAppName = 13;
    public const Enum_14_AgentAdvCostReportListQueryV2FilteringAppName = 14;
    public const Enum_15_AgentAdvCostReportListQueryV2FilteringAppName = 15;
    public const Enum_16_AgentAdvCostReportListQueryV2FilteringAppName = 16;
    public const Enum_17_AgentAdvCostReportListQueryV2FilteringAppName = 17;
    public const Enum_2_AgentAdvCostReportListQueryV2FilteringAppName = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2FilteringAppName = 3;
    public const Enum_4_AgentAdvCostReportListQueryV2FilteringAppName = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2FilteringAppName = 5;
    public const Enum_6_AgentAdvCostReportListQueryV2FilteringAppName = 6;
    public const Enum_7_AgentAdvCostReportListQueryV2FilteringAppName = 7;
    public const Enum_8_AgentAdvCostReportListQueryV2FilteringAppName = 8;
    public const Enum_9_AgentAdvCostReportListQueryV2FilteringAppName = 9;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_10_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_11_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_12_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_13_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_14_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_15_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_16_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_17_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_2_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_3_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_4_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_5_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_6_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_7_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_8_AgentAdvCostReportListQueryV2FilteringAppName,
        self::Enum_9_AgentAdvCostReportListQueryV2FilteringAppName,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2FilteringAppName', $value));
        }
        return (string) $value;
    }
}
