<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30MultiDeliveryMedium
{
    public const ORANGE_EventManagerOptimizedGoalGetV30MultiDeliveryMedium = 'ORANGE';
    public const ORANGE_AND_AWEME_EventManagerOptimizedGoalGetV30MultiDeliveryMedium = 'ORANGE_AND_AWEME';

    public const ALLOWED_VALUES = [
        self::ORANGE_EventManagerOptimizedGoalGetV30MultiDeliveryMedium,
        self::ORANGE_AND_AWEME_EventManagerOptimizedGoalGetV30MultiDeliveryMedium,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30MultiDeliveryMedium', $value));
        }
        return (string) $value;
    }
}
