<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes
{
    public const APP_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes = 'APP';
    public const MINI_PROGRAM_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes = 'MINI_PROGRAM';
    public const ORANGE_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes = 'ORANGE';
    public const QUICK_APP_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes = 'QUICK_APP';
    public const THIRDPARTY_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes = 'THIRDPARTY';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes,
        self::MINI_PROGRAM_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes,
        self::ORANGE_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes,
        self::QUICK_APP_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes,
        self::THIRDPARTY_EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30DataGoalsAssetTypes', $value));
        }
        return (string) $value;
    }
}
