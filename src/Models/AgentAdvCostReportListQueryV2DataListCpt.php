<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListCpt
{
    public const Enum_0_AgentAdvCostReportListQueryV2DataListCpt = 0;
    public const Enum_1_AgentAdvCostReportListQueryV2DataListCpt = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_AgentAdvCostReportListQueryV2DataListCpt,
        self::Enum_1_AgentAdvCostReportListQueryV2DataListCpt,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListCpt', $value));
        }
        return (string) $value;
    }
}
