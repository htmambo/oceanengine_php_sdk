<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2FilteringEcommerceType
{
    public const Enum_1_AgentAdvCostReportListQueryV2FilteringEcommerceType = 1;
    public const Enum_2_AgentAdvCostReportListQueryV2FilteringEcommerceType = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2FilteringEcommerceType = 3;
    public const Enum_4_AgentAdvCostReportListQueryV2FilteringEcommerceType = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2FilteringEcommerceType = 5;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2FilteringEcommerceType,
        self::Enum_2_AgentAdvCostReportListQueryV2FilteringEcommerceType,
        self::Enum_3_AgentAdvCostReportListQueryV2FilteringEcommerceType,
        self::Enum_4_AgentAdvCostReportListQueryV2FilteringEcommerceType,
        self::Enum_5_AgentAdvCostReportListQueryV2FilteringEcommerceType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2FilteringEcommerceType', $value));
        }
        return (string) $value;
    }
}
