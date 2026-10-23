<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePlayableListV30FilteringStatus
{
    public const OFFLINE_FilePlayableListV30FilteringStatus = 'OFFLINE';
    public const ONLINE_FilePlayableListV30FilteringStatus = 'ONLINE';

    public const ALLOWED_VALUES = [
        self::OFFLINE_FilePlayableListV30FilteringStatus,
        self::ONLINE_FilePlayableListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePlayableListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
