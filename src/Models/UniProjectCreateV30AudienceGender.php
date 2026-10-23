<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30AudienceGender
{
    public const GENDER_FEMALE_UniProjectCreateV30AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_UniProjectCreateV30AudienceGender = 'GENDER_MALE';
    public const NONE_UniProjectCreateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_UniProjectCreateV30AudienceGender,
        self::GENDER_MALE_UniProjectCreateV30AudienceGender,
        self::NONE_UniProjectCreateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
