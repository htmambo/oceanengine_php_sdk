<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30LandingType
{
    public const APP_EventManagerOptimizedGoalGetV30LandingType = 'APP';
    public const DPA_EventManagerOptimizedGoalGetV30LandingType = 'DPA';
    public const LINK_EventManagerOptimizedGoalGetV30LandingType = 'LINK';
    public const MICRO_GAME_EventManagerOptimizedGoalGetV30LandingType = 'MICRO_GAME';
    public const NATIVE_ACTION_EventManagerOptimizedGoalGetV30LandingType = 'NATIVE_ACTION';
    public const QUICK_APP_EventManagerOptimizedGoalGetV30LandingType = 'QUICK_APP';
    public const SHOP_EventManagerOptimizedGoalGetV30LandingType = 'SHOP';

    public const ALLOWED_VALUES = [
        self::APP_EventManagerOptimizedGoalGetV30LandingType,
        self::DPA_EventManagerOptimizedGoalGetV30LandingType,
        self::LINK_EventManagerOptimizedGoalGetV30LandingType,
        self::MICRO_GAME_EventManagerOptimizedGoalGetV30LandingType,
        self::NATIVE_ACTION_EventManagerOptimizedGoalGetV30LandingType,
        self::QUICK_APP_EventManagerOptimizedGoalGetV30LandingType,
        self::SHOP_EventManagerOptimizedGoalGetV30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30LandingType', $value));
        }
        return (string) $value;
    }
}
