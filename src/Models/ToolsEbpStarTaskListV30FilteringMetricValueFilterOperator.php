<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskListV30FilteringMetricValueFilterOperator
{
    public const GREATER_THAN_ToolsEbpStarTaskListV30FilteringMetricValueFilterOperator = 'GREATER_THAN';

    public const ALLOWED_VALUES = [
        self::GREATER_THAN_ToolsEbpStarTaskListV30FilteringMetricValueFilterOperator,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskListV30FilteringMetricValueFilterOperator', $value));
        }
        return (string) $value;
    }
}
