<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30LandingType
{
    public const APP_EventManagerOptimizedGoalGetV2V30LandingType = 'APP';
    public const DPA_EventManagerOptimizedGoalGetV2V30LandingType = 'DPA';
    public const LINK_EventManagerOptimizedGoalGetV2V30LandingType = 'LINK';
    public const MICRO_GAME_EventManagerOptimizedGoalGetV2V30LandingType = 'MICRO_GAME';
    public const NATIVE_ACTION_EventManagerOptimizedGoalGetV2V30LandingType = 'NATIVE_ACTION';
    public const QUICK_APP_EventManagerOptimizedGoalGetV2V30LandingType = 'QUICK_APP';
    public const SHOP_EventManagerOptimizedGoalGetV2V30LandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV2V30LandingType,
        self::DPA_EventManagerOptimizedGoalGetV2V30LandingType,
        self::LINK_EventManagerOptimizedGoalGetV2V30LandingType,
        self::MICRO_GAME_EventManagerOptimizedGoalGetV2V30LandingType,
        self::NATIVE_ACTION_EventManagerOptimizedGoalGetV2V30LandingType,
        self::QUICK_APP_EventManagerOptimizedGoalGetV2V30LandingType,
        self::SHOP_EventManagerOptimizedGoalGetV2V30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30LandingType', $value));
        }
        return (string) $value;
    }
}
