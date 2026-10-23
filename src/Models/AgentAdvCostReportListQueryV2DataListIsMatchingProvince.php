<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListIsMatchingProvince
{
    public const Enum_0_AgentAdvCostReportListQueryV2DataListIsMatchingProvince = 0;
    public const Enum_1_AgentAdvCostReportListQueryV2DataListIsMatchingProvince = 1;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListIsMatchingProvince = 2;

    public const ALLOWED_VALUES = [
        self::Enum_0_AgentAdvCostReportListQueryV2DataListIsMatchingProvince,
        self::Enum_1_AgentAdvCostReportListQueryV2DataListIsMatchingProvince,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListIsMatchingProvince,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListIsMatchingProvince', $value));
        }
        return (string) $value;
    }
}
