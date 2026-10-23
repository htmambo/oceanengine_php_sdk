<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30DeliveryType
{
    public const DURATION_EventManagerOptimizedGoalGetV2V30DeliveryType = 'DURATION';
    public const NORMAL_EventManagerOptimizedGoalGetV2V30DeliveryType = 'NORMAL';

    public const ALLOWED_VALUES = [
        self::DURATION_EventManagerOptimizedGoalGetV2V30DeliveryType,
        self::NORMAL_EventManagerOptimizedGoalGetV2V30DeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30DeliveryType', $value));
        }
        return (string) $value;
    }
}
