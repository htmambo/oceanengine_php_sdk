<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormUpdateV2ExtendInfoCountConfigCountType
{
    public const COUNT_TYPE_INCREMENT_ClueFormUpdateV2ExtendInfoCountConfigCountType = 'COUNT_TYPE_INCREMENT';
    public const COUNT_TYPE_DECREMENT_ClueFormUpdateV2ExtendInfoCountConfigCountType = 'COUNT_TYPE_DECREMENT';

    public const ALLOWED_VALUES = [
        self::COUNT_TYPE_INCREMENT_ClueFormUpdateV2ExtendInfoCountConfigCountType,
        self::COUNT_TYPE_DECREMENT_ClueFormUpdateV2ExtendInfoCountConfigCountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormUpdateV2ExtendInfoCountConfigCountType', $value));
        }
        return (string) $value;
    }
}
