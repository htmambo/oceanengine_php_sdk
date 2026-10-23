<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataAudienceGender
{
    public const FEMALE_LocalOcProjectGetV30DataAudienceGender = 'FEMALE';
    public const MALE_LocalOcProjectGetV30DataAudienceGender = 'MALE';
    public const NONE_LocalOcProjectGetV30DataAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::FEMALE_LocalOcProjectGetV30DataAudienceGender,
        self::MALE_LocalOcProjectGetV30DataAudienceGender,
        self::NONE_LocalOcProjectGetV30DataAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataAudienceGender', $value));
        }
        return (string) $value;
    }
}
