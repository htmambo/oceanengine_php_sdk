<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30MicroPromotionType
{
    public const AWEME_EventManagerOptimizedGoalGetV30MicroPromotionType = 'AWEME';
    public const BYTE_APP_EventManagerOptimizedGoalGetV30MicroPromotionType = 'BYTE_APP';
    public const BYTE_GAME_EventManagerOptimizedGoalGetV30MicroPromotionType = 'BYTE_GAME';
    public const WECHAT_APP_EventManagerOptimizedGoalGetV30MicroPromotionType = 'WECHAT_APP';
    public const WECHAT_GAME_EventManagerOptimizedGoalGetV30MicroPromotionType = 'WECHAT_GAME';

    public const ALLOWED_VALUES = [
        self::AWEME_EventManagerOptimizedGoalGetV30MicroPromotionType,
        self::BYTE_APP_EventManagerOptimizedGoalGetV30MicroPromotionType,
        self::BYTE_GAME_EventManagerOptimizedGoalGetV30MicroPromotionType,
        self::WECHAT_APP_EventManagerOptimizedGoalGetV30MicroPromotionType,
        self::WECHAT_GAME_EventManagerOptimizedGoalGetV30MicroPromotionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30MicroPromotionType', $value));
        }
        return (string) $value;
    }
}
