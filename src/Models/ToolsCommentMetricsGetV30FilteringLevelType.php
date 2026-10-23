<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsCommentMetricsGetV30FilteringLevelType
{
    public const LEVEL_ALL_ToolsCommentMetricsGetV30FilteringLevelType = 'LEVEL_ALL';
    public const LEVEL_ONE_ToolsCommentMetricsGetV30FilteringLevelType = 'LEVEL_ONE';
    public const LEVEL_TWO_ToolsCommentMetricsGetV30FilteringLevelType = 'LEVEL_TWO';

    public const ALLOWED_VALUES = [
        self::LEVEL_ALL_ToolsCommentMetricsGetV30FilteringLevelType,
        self::LEVEL_ONE_ToolsCommentMetricsGetV30FilteringLevelType,
        self::LEVEL_TWO_ToolsCommentMetricsGetV30FilteringLevelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsCommentMetricsGetV30FilteringLevelType', $value));
        }
        return (string) $value;
    }
}
