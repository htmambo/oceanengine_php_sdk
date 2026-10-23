<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30DataGoalsValueType
{
    public const DISABLED_EventManagerOptimizedGoalGetV30DataGoalsValueType = 'DISABLED';
    public const DISCRIMINATEBYGROUP_EventManagerOptimizedGoalGetV30DataGoalsValueType = 'DISCRIMINATEBYGROUP';
    public const DYNAMICVALUE_EventManagerOptimizedGoalGetV30DataGoalsValueType = 'DYNAMICVALUE';
    public const FIXED_EventManagerOptimizedGoalGetV30DataGoalsValueType = 'FIXED';
    public const UNSET_EventManagerOptimizedGoalGetV30DataGoalsValueType = 'UNSET';

    public const ALLOWED_VALUES = [
        self::DISABLED_EventManagerOptimizedGoalGetV30DataGoalsValueType,
        self::DISCRIMINATEBYGROUP_EventManagerOptimizedGoalGetV30DataGoalsValueType,
        self::DYNAMICVALUE_EventManagerOptimizedGoalGetV30DataGoalsValueType,
        self::FIXED_EventManagerOptimizedGoalGetV30DataGoalsValueType,
        self::UNSET_EventManagerOptimizedGoalGetV30DataGoalsValueType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30DataGoalsValueType', $value));
        }
        return (string) $value;
    }
}
