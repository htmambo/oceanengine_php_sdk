<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDeepBidTypeGetV30ValueOptimizedType
{
    public const ACTION_EventManagerDeepBidTypeGetV30ValueOptimizedType = 'ACTION';
    public const OFF_EventManagerDeepBidTypeGetV30ValueOptimizedType = 'OFF';

    public const ALLOWED_VALUES = [
        self::ACTION_EventManagerDeepBidTypeGetV30ValueOptimizedType,
        self::OFF_EventManagerDeepBidTypeGetV30ValueOptimizedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDeepBidTypeGetV30ValueOptimizedType', $value));
        }
        return (string) $value;
    }
}
