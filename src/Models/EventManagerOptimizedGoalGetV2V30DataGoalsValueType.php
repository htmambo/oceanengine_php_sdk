<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30DataGoalsValueType
{
    public const DISABLED_EventManagerOptimizedGoalGetV2V30DataGoalsValueType = 'DISABLED';
    public const DISCRIMINATEBYGROUP_EventManagerOptimizedGoalGetV2V30DataGoalsValueType = 'DISCRIMINATEBYGROUP';
    public const DYNAMICVALUE_EventManagerOptimizedGoalGetV2V30DataGoalsValueType = 'DYNAMICVALUE';
    public const FIXED_EventManagerOptimizedGoalGetV2V30DataGoalsValueType = 'FIXED';
    public const UNSET_EventManagerOptimizedGoalGetV2V30DataGoalsValueType = 'UNSET';

    public const ALLOWED_VALUES = [
        self::DISABLED_EventManagerOptimizedGoalGetV2V30DataGoalsValueType,
        self::DISCRIMINATEBYGROUP_EventManagerOptimizedGoalGetV2V30DataGoalsValueType,
        self::DYNAMICVALUE_EventManagerOptimizedGoalGetV2V30DataGoalsValueType,
        self::FIXED_EventManagerOptimizedGoalGetV2V30DataGoalsValueType,
        self::UNSET_EventManagerOptimizedGoalGetV2V30DataGoalsValueType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30DataGoalsValueType', $value));
        }
        return (string) $value;
    }
}
