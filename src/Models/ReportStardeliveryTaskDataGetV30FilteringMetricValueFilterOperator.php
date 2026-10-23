<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator
{
    public const Enum_1_ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator = 1;

    public const ALLOWED_VALUES = [
        self::Enum_1_ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30FilteringMetricValueFilterOperator', $value));
        }
        return (string) $value;
    }
}
