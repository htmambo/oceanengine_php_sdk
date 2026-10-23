<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListCashbackType
{
    public const Enum_MINUS_1_AgentAdvCostReportListQueryV2DataListCashbackType = -1;
    public const Enum_0_AgentAdvCostReportListQueryV2DataListCashbackType = 0;
    public const Enum_1_AgentAdvCostReportListQueryV2DataListCashbackType = 1;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListCashbackType = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2DataListCashbackType = 3;
    public const Enum_4_AgentAdvCostReportListQueryV2DataListCashbackType = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2DataListCashbackType = 5;
    public const Enum_6_AgentAdvCostReportListQueryV2DataListCashbackType = 6;
    public const Enum_7_AgentAdvCostReportListQueryV2DataListCashbackType = 7;
    public const Enum_8_AgentAdvCostReportListQueryV2DataListCashbackType = 8;
    public const Enum_9_AgentAdvCostReportListQueryV2DataListCashbackType = 9;

    public const ALLOWED_VALUES = [
        self::Enum_MINUS_1_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_0_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_1_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_3_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_4_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_5_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_6_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_7_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_8_AgentAdvCostReportListQueryV2DataListCashbackType,
        self::Enum_9_AgentAdvCostReportListQueryV2DataListCashbackType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListCashbackType', $value));
        }
        return (string) $value;
    }
}
