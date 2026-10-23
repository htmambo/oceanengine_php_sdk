<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerOptimizedGoalGetV2V30AdType
{
    public const ALL_EventManagerOptimizedGoalGetV2V30AdType = 'ALL';
    public const SEARCH_EventManagerOptimizedGoalGetV2V30AdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerOptimizedGoalGetV2V30AdType,
        self::SEARCH_EventManagerOptimizedGoalGetV2V30AdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerOptimizedGoalGetV2V30AdType', $value));
        }
        return (string) $value;
    }
}
