<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePlayableListV30DataMaterialsStatus
{
    public const OFFLINE_FilePlayableListV30DataMaterialsStatus = 'OFFLINE';
    public const ONLINE_FilePlayableListV30DataMaterialsStatus = 'ONLINE';

    public const ALLOWED_VALUES = [
        self::OFFLINE_FilePlayableListV30DataMaterialsStatus,
        self::ONLINE_FilePlayableListV30DataMaterialsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePlayableListV30DataMaterialsStatus', $value));
        }
        return (string) $value;
    }
}
