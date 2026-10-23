<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerShareCancelV30ShareMode
{
    public const ALL_EventManagerShareCancelV30ShareMode = 'ALL';
    public const PART_EventManagerShareCancelV30ShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::ALL_EventManagerShareCancelV30ShareMode,
        self::PART_EventManagerShareCancelV30ShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerShareCancelV30ShareMode', $value));
        }
        return (string) $value;
    }
}
