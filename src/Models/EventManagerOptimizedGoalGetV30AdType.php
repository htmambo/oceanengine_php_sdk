<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV30AdType
{
    public const ALL_EventManagerOptimizedGoalGetV30AdType = 'ALL';
    public const SEARCH_EventManagerOptimizedGoalGetV30AdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerOptimizedGoalGetV30AdType,
        self::SEARCH_EventManagerOptimizedGoalGetV30AdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV30AdType', $value));
        }
        return (string) $value;
    }
}
