<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataProjectType
{
    public const OC_PROJECT_LocalOcProjectGetV30DataProjectType = 'OC_PROJECT';
    public const STD_PROJECT_LocalOcProjectGetV30DataProjectType = 'STD_PROJECT';

    public const ALLOWED_VALUES = [
        self::OC_PROJECT_LocalOcProjectGetV30DataProjectType,
        self::STD_PROJECT_LocalOcProjectGetV30DataProjectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataProjectType', $value));
        }
        return (string) $value;
    }
}
