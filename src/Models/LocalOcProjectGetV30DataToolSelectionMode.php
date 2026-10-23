<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataToolSelectionMode
{
    public const OFF_LocalOcProjectGetV30DataToolSelectionMode = 'OFF';
    public const ON_LocalOcProjectGetV30DataToolSelectionMode = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_LocalOcProjectGetV30DataToolSelectionMode,
        self::ON_LocalOcProjectGetV30DataToolSelectionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataToolSelectionMode', $value));
        }
        return (string) $value;
    }
}
