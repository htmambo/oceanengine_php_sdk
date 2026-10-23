<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30ProductSetting
{
    public const SDPA_EventManagerOptimizedGoalGetV30ProductSetting = 'SDPA';

    public const ALLOWED_VALUES = [
        self::SDPA_EventManagerOptimizedGoalGetV30ProductSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30ProductSetting', $value));
        }
        return (string) $value;
    }
}
