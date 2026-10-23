<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListExternalAction
{
    public const CLUE_ACQUISITION_LocalOcProjectListV30DataProjectListExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalOcProjectListV30DataProjectListExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalOcProjectListV30DataProjectListExternalAction = 'CLUE_HIGH_INTENTION';
    public const PRIVATE_MESSAGE_LocalOcProjectListV30DataProjectListExternalAction = 'PRIVATE_MESSAGE';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalOcProjectListV30DataProjectListExternalAction,
        self::CLUE_CONFIRM_LocalOcProjectListV30DataProjectListExternalAction,
        self::CLUE_HIGH_INTENTION_LocalOcProjectListV30DataProjectListExternalAction,
        self::PRIVATE_MESSAGE_LocalOcProjectListV30DataProjectListExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListExternalAction', $value));
        }
        return (string) $value;
    }
}
