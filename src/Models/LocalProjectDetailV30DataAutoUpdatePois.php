<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAutoUpdatePois
{
    public const OFF_LocalProjectDetailV30DataAutoUpdatePois = 'OFF';
    public const ON_LocalProjectDetailV30DataAutoUpdatePois = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_LocalProjectDetailV30DataAutoUpdatePois,
        self::ON_LocalProjectDetailV30DataAutoUpdatePois,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAutoUpdatePois', $value));
        }
        return (string) $value;
    }
}
