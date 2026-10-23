<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType
{
    public const DISABLED_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType = 'Disabled';
    public const DISCRIMINATE_BY_GROUP_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType = 'DiscriminateByGroup';
    public const DYNAMIC_VALUE_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType = 'DynamicValue';
    public const FIXED_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType = 'Fixed';

    public const ALLOWED_VALUES = [
        self::DISABLED_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType,
        self::DISCRIMINATE_BY_GROUP_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType,
        self::DYNAMIC_VALUE_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType,
        self::FIXED_ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventConvertOptimizedGoalGetV30DataGoalsValueType', $value));
        }
        return (string) $value;
    }
}
