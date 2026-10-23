<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType
{
    public const DISABLED_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType = 'Disabled';
    public const DISCRIMINATE_BY_GROUP_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType = 'DiscriminateByGroup';
    public const DYNAMIC_VALUE_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType = 'DynamicValue';
    public const FIXED_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType = 'Fixed';

    public const ALLOWED_VALUES = [
        self::DISABLED_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType,
        self::DISCRIMINATE_BY_GROUP_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType,
        self::DYNAMIC_VALUE_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType,
        self::FIXED_ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventConvertOptimizedGoalGetV30DataGoalsDeepGoalsValueType', $value));
        }
        return (string) $value;
    }
}
