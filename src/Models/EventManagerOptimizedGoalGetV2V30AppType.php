<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30AppType
{
    public const ANDROID_EventManagerOptimizedGoalGetV2V30AppType = 'ANDROID';
    public const DEFAULT_EventManagerOptimizedGoalGetV2V30AppType = 'DEFAULT';
    public const HARMONY_EventManagerOptimizedGoalGetV2V30AppType = 'HARMONY';
    public const IOS_EventManagerOptimizedGoalGetV2V30AppType = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_EventManagerOptimizedGoalGetV2V30AppType,
        self::DEFAULT_EventManagerOptimizedGoalGetV2V30AppType,
        self::HARMONY_EventManagerOptimizedGoalGetV2V30AppType,
        self::IOS_EventManagerOptimizedGoalGetV2V30AppType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30AppType', $value));
        }
        return (string) $value;
    }
}
