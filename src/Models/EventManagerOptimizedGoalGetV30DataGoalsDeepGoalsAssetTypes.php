<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes
{
    public const APP_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'APP';
    public const MINI_PROGRAM_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'MINI_PROGRAM';
    public const ORANGE_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'ORANGE';
    public const QUICK_APP_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'QUICK_APP';
    public const THIRDPARTY_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes = 'THIRDPARTY';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
        self::MINI_PROGRAM_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
        self::ORANGE_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
        self::QUICK_APP_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
        self::THIRDPARTY_EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30DataGoalsDeepGoalsAssetTypes', $value));
        }
        return (string) $value;
    }
}
