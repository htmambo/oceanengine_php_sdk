<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListAdType
{
    public const ALL_LocalOcProjectListV30DataProjectListAdType = 'ALL';
    public const GENERAL_LocalOcProjectListV30DataProjectListAdType = 'GENERAL';
    public const SEARCHING_LocalOcProjectListV30DataProjectListAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::ALL_LocalOcProjectListV30DataProjectListAdType,
        self::GENERAL_LocalOcProjectListV30DataProjectListAdType,
        self::SEARCHING_LocalOcProjectListV30DataProjectListAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListAdType', $value));
        }
        return (string) $value;
    }
}
