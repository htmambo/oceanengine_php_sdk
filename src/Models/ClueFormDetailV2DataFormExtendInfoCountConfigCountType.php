<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormDetailV2DataFormExtendInfoCountConfigCountType
{
    public const COUNT_TYPE_INCREMENT_ClueFormDetailV2DataFormExtendInfoCountConfigCountType = 'COUNT_TYPE_INCREMENT';
    public const COUNT_TYPE_DECREMENT_ClueFormDetailV2DataFormExtendInfoCountConfigCountType = 'COUNT_TYPE_DECREMENT';

    public const ALLOWED_VALUES = [
        self::COUNT_TYPE_INCREMENT_ClueFormDetailV2DataFormExtendInfoCountConfigCountType,
        self::COUNT_TYPE_DECREMENT_ClueFormDetailV2DataFormExtendInfoCountConfigCountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormDetailV2DataFormExtendInfoCountConfigCountType', $value));
        }
        return (string) $value;
    }
}
