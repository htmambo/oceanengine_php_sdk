<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30AppPromotionType
{
    public const DOWNLOAD_EventManagerOptimizedGoalGetV30AppPromotionType = 'DOWNLOAD';
    public const LAUNCH_EventManagerOptimizedGoalGetV30AppPromotionType = 'LAUNCH';
    public const RESERVE_EventManagerOptimizedGoalGetV30AppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_EventManagerOptimizedGoalGetV30AppPromotionType,
        self::LAUNCH_EventManagerOptimizedGoalGetV30AppPromotionType,
        self::RESERVE_EventManagerOptimizedGoalGetV30AppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30AppPromotionType', $value));
        }
        return (string) $value;
    }
}
