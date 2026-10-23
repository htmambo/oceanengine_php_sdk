<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30FilteringAdType
{
    public const ALL_LocalOcProjectListV30FilteringAdType = 'ALL';
    public const GENERAL_LocalOcProjectListV30FilteringAdType = 'GENERAL';
    public const SEARCHING_LocalOcProjectListV30FilteringAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::ALL_LocalOcProjectListV30FilteringAdType,
        self::GENERAL_LocalOcProjectListV30FilteringAdType,
        self::SEARCHING_LocalOcProjectListV30FilteringAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30FilteringAdType', $value));
        }
        return (string) $value;
    }
}
