<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AutoUpdatePois
{
    public const OFF_LocalProjectCreateV30AutoUpdatePois = 'OFF';
    public const ON_LocalProjectCreateV30AutoUpdatePois = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_LocalProjectCreateV30AutoUpdatePois,
        self::ON_LocalProjectCreateV30AutoUpdatePois,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AutoUpdatePois', $value));
        }
        return (string) $value;
    }
}
