<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30AppType
{
    public const ANDROID_EventManagerOptimizedGoalGetV30AppType = 'ANDROID';
    public const DEFAULT_EventManagerOptimizedGoalGetV30AppType = 'DEFAULT';
    public const HARMONY_EventManagerOptimizedGoalGetV30AppType = 'HARMONY';
    public const IOS_EventManagerOptimizedGoalGetV30AppType = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_EventManagerOptimizedGoalGetV30AppType,
        self::DEFAULT_EventManagerOptimizedGoalGetV30AppType,
        self::HARMONY_EventManagerOptimizedGoalGetV30AppType,
        self::IOS_EventManagerOptimizedGoalGetV30AppType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30AppType', $value));
        }
        return (string) $value;
    }
}
