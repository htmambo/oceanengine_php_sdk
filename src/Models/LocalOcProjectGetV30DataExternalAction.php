<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataExternalAction
{
    public const CLUE_ACQUISITION_LocalOcProjectGetV30DataExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalOcProjectGetV30DataExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalOcProjectGetV30DataExternalAction = 'CLUE_HIGH_INTENTION';
    public const PRIVATE_MESSAGE_LocalOcProjectGetV30DataExternalAction = 'PRIVATE_MESSAGE';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalOcProjectGetV30DataExternalAction,
        self::CLUE_CONFIRM_LocalOcProjectGetV30DataExternalAction,
        self::CLUE_HIGH_INTENTION_LocalOcProjectGetV30DataExternalAction,
        self::PRIVATE_MESSAGE_LocalOcProjectGetV30DataExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataExternalAction', $value));
        }
        return (string) $value;
    }
}
