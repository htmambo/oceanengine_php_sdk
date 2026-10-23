<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListPricingCategory
{
    public const Enum_0_AgentAdvCostReportListQueryV2DataListPricingCategory = 0;
    public const Enum_1_AgentAdvCostReportListQueryV2DataListPricingCategory = 1;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListPricingCategory = 2;

    public const ALLOWED_VALUES = [
        self::Enum_0_AgentAdvCostReportListQueryV2DataListPricingCategory,
        self::Enum_1_AgentAdvCostReportListQueryV2DataListPricingCategory,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListPricingCategory,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListPricingCategory', $value));
        }
        return (string) $value;
    }
}
