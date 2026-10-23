<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30FilteringAdType
{
    public const ALL_LocalProjectListV30FilteringAdType = 'ALL';
    public const GENERAL_LocalProjectListV30FilteringAdType = 'GENERAL';
    public const SEARCHING_LocalProjectListV30FilteringAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectListV30FilteringAdType,
        self::GENERAL_LocalProjectListV30FilteringAdType,
        self::SEARCHING_LocalProjectListV30FilteringAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30FilteringAdType', $value));
        }
        return (string) $value;
    }
}
