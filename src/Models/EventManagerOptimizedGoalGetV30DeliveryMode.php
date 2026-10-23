<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30DeliveryMode
{
    public const PROCEDURAL_EventManagerOptimizedGoalGetV30DeliveryMode = 'PROCEDURAL';

    public const ALLOWED_VALUES = [
        self::PROCEDURAL_EventManagerOptimizedGoalGetV30DeliveryMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30DeliveryMode', $value));
        }
        return (string) $value;
    }
}
