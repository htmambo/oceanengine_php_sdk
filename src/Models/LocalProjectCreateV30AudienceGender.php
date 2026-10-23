<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceGender
{
    public const FEMALE_LocalProjectCreateV30AudienceGender = 'FEMALE';
    public const MALE_LocalProjectCreateV30AudienceGender = 'MALE';
    public const NONE_LocalProjectCreateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::FEMALE_LocalProjectCreateV30AudienceGender,
        self::MALE_LocalProjectCreateV30AudienceGender,
        self::NONE_LocalProjectCreateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
