<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2FilteringCostSource
{
    public const Enum_1_AgentAdvCostReportListQueryV2FilteringCostSource = 1;
    public const Enum_102_AgentAdvCostReportListQueryV2FilteringCostSource = 102;
    public const Enum_12_AgentAdvCostReportListQueryV2FilteringCostSource = 12;
    public const Enum_159_AgentAdvCostReportListQueryV2FilteringCostSource = 159;
    public const Enum_2_AgentAdvCostReportListQueryV2FilteringCostSource = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2FilteringCostSource = 3;
    public const Enum_31_AgentAdvCostReportListQueryV2FilteringCostSource = 31;
    public const Enum_4_AgentAdvCostReportListQueryV2FilteringCostSource = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2FilteringCostSource = 5;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_102_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_12_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_159_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_2_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_3_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_31_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_4_AgentAdvCostReportListQueryV2FilteringCostSource,
        self::Enum_5_AgentAdvCostReportListQueryV2FilteringCostSource,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2FilteringCostSource', $value));
        }
        return (string) $value;
    }
}
