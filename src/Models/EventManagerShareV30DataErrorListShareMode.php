<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareV30DataErrorListShareMode
{
    public const ALL_EventManagerShareV30DataErrorListShareMode = 'ALL';
    public const PART_EventManagerShareV30DataErrorListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerShareV30DataErrorListShareMode,
        self::PART_EventManagerShareV30DataErrorListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareV30DataErrorListShareMode', $value));
        }
        return (string) $value;
    }
}
