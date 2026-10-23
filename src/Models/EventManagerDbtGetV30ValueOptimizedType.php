<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30ValueOptimizedType
{
    public const ACTION_EventManagerDbtGetV30ValueOptimizedType = 'ACTION';
    public const OFF_EventManagerDbtGetV30ValueOptimizedType = 'OFF';

    public const ALLOWED_VALUES = [
        self::ACTION_EventManagerDbtGetV30ValueOptimizedType,
        self::OFF_EventManagerDbtGetV30ValueOptimizedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30ValueOptimizedType', $value));
        }
        return (string) $value;
    }
}
