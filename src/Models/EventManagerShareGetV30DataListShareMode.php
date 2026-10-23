<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareGetV30DataListShareMode
{
    public const ALL_EventManagerShareGetV30DataListShareMode = 'ALL';
    public const PART_EventManagerShareGetV30DataListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerShareGetV30DataListShareMode,
        self::PART_EventManagerShareGetV30DataListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareGetV30DataListShareMode', $value));
        }
        return (string) $value;
    }
}
