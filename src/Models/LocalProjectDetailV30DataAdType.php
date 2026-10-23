<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAdType
{
    public const GENERAL_LocalProjectDetailV30DataAdType = 'GENERAL';
    public const SEARCHING_LocalProjectDetailV30DataAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::GENERAL_LocalProjectDetailV30DataAdType,
        self::SEARCHING_LocalProjectDetailV30DataAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAdType', $value));
        }
        return (string) $value;
    }
}
