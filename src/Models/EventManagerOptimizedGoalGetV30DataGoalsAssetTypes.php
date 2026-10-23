<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30DataGoalsAssetTypes
{
    public const APP_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes = 'APP';
    public const MINI_PROGRAM_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes = 'MINI_PROGRAM';
    public const ORANGE_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes = 'ORANGE';
    public const QUICK_APP_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes = 'QUICK_APP';
    public const THIRDPARTY_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes = 'THIRDPARTY';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes,
        self::MINI_PROGRAM_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes,
        self::ORANGE_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes,
        self::QUICK_APP_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes,
        self::THIRDPARTY_EventManagerOptimizedGoalGetV30DataGoalsAssetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30DataGoalsAssetTypes', $value));
        }
        return (string) $value;
    }
}
