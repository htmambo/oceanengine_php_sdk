<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListEcommerceType
{
    public const Enum_1_AgentAdvCostReportListQueryV2DataListEcommerceType = 1;
    public const Enum_2_AgentAdvCostReportListQueryV2DataListEcommerceType = 2;
    public const Enum_3_AgentAdvCostReportListQueryV2DataListEcommerceType = 3;
    public const Enum_4_AgentAdvCostReportListQueryV2DataListEcommerceType = 4;
    public const Enum_5_AgentAdvCostReportListQueryV2DataListEcommerceType = 5;

    public const ALLOWED_VALUES = [
        self::Enum_1_AgentAdvCostReportListQueryV2DataListEcommerceType,
        self::Enum_2_AgentAdvCostReportListQueryV2DataListEcommerceType,
        self::Enum_3_AgentAdvCostReportListQueryV2DataListEcommerceType,
        self::Enum_4_AgentAdvCostReportListQueryV2DataListEcommerceType,
        self::Enum_5_AgentAdvCostReportListQueryV2DataListEcommerceType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListEcommerceType', $value));
        }
        return (string) $value;
    }
}
