<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListCostSource
{
    public const Enum_1_AgentAdvCostReportListQueryV2DataListCostSource = 1;
    public const Enum_102_AgentAdvCostReportListQueryV2DataListCostSource = 102;
    public const Enum_12_AgentAdvCostReportListQueryV2DataListCostSource = 12;
    public const Enum_159_AgentAdvCostReportListQueryV2DataListCostSource = 159;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListCostSource = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2DataListCostSource = 3;
    public const Enum_31_AgentAdvCostReportListQueryV2DataListCostSource = 31;
    public const Enum_4_AgentAdvCostReportListQueryV2DataListCostSource = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2DataListCostSource = 5;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_102_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_12_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_159_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_3_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_31_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_4_AgentAdvCostReportListQueryV2DataListCostSource,
        self::Enum_5_AgentAdvCostReportListQueryV2DataListCostSource,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListCostSource', $value));
        }
        return (string) $value;
    }
}
