<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListSettlementStatsType
{
    public const Enum_1_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 1;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 3;
    public const Enum_4_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 5;
    public const Enum_6_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 6;
    public const Enum_7_AgentAdvCostReportListQueryV2DataListSettlementStatsType = 7;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
        self::Enum_3_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
        self::Enum_4_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
        self::Enum_5_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
        self::Enum_6_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
        self::Enum_7_AgentAdvCostReportListQueryV2DataListSettlementStatsType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListSettlementStatsType', $value));
        }
        return (string) $value;
    }
}
