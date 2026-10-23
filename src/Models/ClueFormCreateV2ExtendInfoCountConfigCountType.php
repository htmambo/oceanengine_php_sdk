<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormCreateV2ExtendInfoCountConfigCountType
{
    public const COUNT_TYPE_INCREMENT_ClueFormCreateV2ExtendInfoCountConfigCountType = 'COUNT_TYPE_INCREMENT';
    public const COUNT_TYPE_DECREMENT_ClueFormCreateV2ExtendInfoCountConfigCountType = 'COUNT_TYPE_DECREMENT';

    public const ALLOWED_VALUES = [
        self::COUNT_TYPE_INCREMENT_ClueFormCreateV2ExtendInfoCountConfigCountType,
        self::COUNT_TYPE_DECREMENT_ClueFormCreateV2ExtendInfoCountConfigCountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormCreateV2ExtendInfoCountConfigCountType', $value));
        }
        return (string) $value;
    }
}
