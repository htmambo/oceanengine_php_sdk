<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvCostReportListQueryV2DataListFeedslive
{
    public const Enum_0_AgentAdvCostReportListQueryV2DataListFeedslive = 0;
    public const Enum_1_AgentAdvCostReportListQueryV2DataListFeedslive = 1;
    public const Enum_999_AgentAdvCostReportListQueryV2DataListFeedslive = 999;

    public const ALLOWED_VALUES = [
        self::Enum_0_AgentAdvCostReportListQueryV2DataListFeedslive,
        self::Enum_1_AgentAdvCostReportListQueryV2DataListFeedslive,
        self::Enum_999_AgentAdvCostReportListQueryV2DataListFeedslive,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvCostReportListQueryV2DataListFeedslive', $value));
        }
        return (string) $value;
    }
}
