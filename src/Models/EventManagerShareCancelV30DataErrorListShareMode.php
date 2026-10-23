<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareCancelV30DataErrorListShareMode
{
    public const ALL_EventManagerShareCancelV30DataErrorListShareMode = 'ALL';
    public const PART_EventManagerShareCancelV30DataErrorListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerShareCancelV30DataErrorListShareMode,
        self::PART_EventManagerShareCancelV30DataErrorListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareCancelV30DataErrorListShareMode', $value));
        }
        return (string) $value;
    }
}
