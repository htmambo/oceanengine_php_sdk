<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePlayableListV30MaterialType
{
    public const PLAYABLE_NEW_FilePlayableListV30MaterialType = 'PLAYABLE_NEW';
    public const STRAIGHT_PLAYABLE_FilePlayableListV30MaterialType = 'STRAIGHT_PLAYABLE';

    public const ALLOWED_VALUES = [
        self::PLAYABLE_NEW_FilePlayableListV30MaterialType,
        self::STRAIGHT_PLAYABLE_FilePlayableListV30MaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePlayableListV30MaterialType', $value));
        }
        return (string) $value;
    }
}
