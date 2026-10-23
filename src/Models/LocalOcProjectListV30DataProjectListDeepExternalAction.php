<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListDeepExternalAction
{
    public const MESSAGE_INTENTION_CLUE_LocalOcProjectListV30DataProjectListDeepExternalAction = 'MESSAGE_INTENTION_CLUE';

    public const ALLOWED_VALUES = [
        self::MESSAGE_INTENTION_CLUE_LocalOcProjectListV30DataProjectListDeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListDeepExternalAction', $value));
        }
        return (string) $value;
    }
}
