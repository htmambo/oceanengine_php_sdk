<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AdType
{
    public const GENERAL_LocalProjectCreateV30AdType = 'GENERAL';
    public const SEARCHING_LocalProjectCreateV30AdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::GENERAL_LocalProjectCreateV30AdType,
        self::SEARCHING_LocalProjectCreateV30AdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AdType', $value));
        }
        return (string) $value;
    }
}
