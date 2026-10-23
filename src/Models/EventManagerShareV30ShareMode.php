<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareV30ShareMode
{
    public const ALL_EventManagerShareV30ShareMode = 'ALL';
    public const PART_EventManagerShareV30ShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerShareV30ShareMode,
        self::PART_EventManagerShareV30ShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareV30ShareMode', $value));
        }
        return (string) $value;
    }
}
