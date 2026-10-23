<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30AppPromotionType
{
    public const DOWNLOAD_EventManagerOptimizedGoalGetV2V30AppPromotionType = 'DOWNLOAD';
    public const LAUNCH_EventManagerOptimizedGoalGetV2V30AppPromotionType = 'LAUNCH';
    public const RESERVE_EventManagerOptimizedGoalGetV2V30AppPromotionType = 'RESERVE';

    public const ALLOWED_VALUES = [
        self::DOWNLOAD_EventManagerOptimizedGoalGetV2V30AppPromotionType,
        self::LAUNCH_EventManagerOptimizedGoalGetV2V30AppPromotionType,
        self::RESERVE_EventManagerOptimizedGoalGetV2V30AppPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30AppPromotionType', $value));
        }
        return (string) $value;
    }
}
