<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListAdType
{
    public const GENERAL_LocalProjectListV30DataProjectListAdType = 'GENERAL';
    public const SEARCHING_LocalProjectListV30DataProjectListAdType = 'SEARCHING';

    public const ALLOWED_VALUES = [
        self::GENERAL_LocalProjectListV30DataProjectListAdType,
        self::SEARCHING_LocalProjectListV30DataProjectListAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListAdType', $value));
        }
        return (string) $value;
    }
}
