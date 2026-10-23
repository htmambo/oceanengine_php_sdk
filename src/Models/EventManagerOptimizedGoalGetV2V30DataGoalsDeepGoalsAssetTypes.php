<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes
{
    public const APP_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes = 'APP';
    public const MINI_PROGRAM_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes = 'MINI_PROGRAM';
    public const ORANGE_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes = 'ORANGE';
    public const QUICK_APP_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes = 'QUICK_APP';
    public const THIRDPARTY_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes = 'THIRDPARTY';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes,
        self::MINI_PROGRAM_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes,
        self::ORANGE_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes,
        self::QUICK_APP_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes,
        self::THIRDPARTY_EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30DataGoalsDeepGoalsAssetTypes', $value));
        }
        return (string) $value;
    }
}
