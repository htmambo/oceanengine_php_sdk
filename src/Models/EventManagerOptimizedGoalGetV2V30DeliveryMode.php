<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30DeliveryMode
{
    public const MANUAL_EventManagerOptimizedGoalGetV2V30DeliveryMode = 'MANUAL';
    public const PROCEDURAL_EventManagerOptimizedGoalGetV2V30DeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::MANUAL_EventManagerOptimizedGoalGetV2V30DeliveryMode,
        self::PROCEDURAL_EventManagerOptimizedGoalGetV2V30DeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30DeliveryMode', $value));
        }
        return (string) $value;
    }
}
