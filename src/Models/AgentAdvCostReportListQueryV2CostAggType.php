<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2CostAggType
{
    public const DAY_AGG_AgentAdvCostReportListQueryV2CostAggType = 'DAY_AGG';

    public const ALLOWED_VALUES = [
        self::DAY_AGG_AgentAdvCostReportListQueryV2CostAggType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2CostAggType', $value));
        }
        return (string) $value;
    }
}
