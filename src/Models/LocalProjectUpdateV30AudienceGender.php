<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceGender
{
    public const FEMALE_LocalProjectUpdateV30AudienceGender = 'FEMALE';
    public const MALE_LocalProjectUpdateV30AudienceGender = 'MALE';
    public const NONE_LocalProjectUpdateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::FEMALE_LocalProjectUpdateV30AudienceGender,
        self::MALE_LocalProjectUpdateV30AudienceGender,
        self::NONE_LocalProjectUpdateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
