<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceGender
{
    public const GENDER_FEMALE_StdProjectUpdateV30AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_StdProjectUpdateV30AudienceGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_StdProjectUpdateV30AudienceGender = 'GENDER_UNLIMITED';
    public const NONE_StdProjectUpdateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_StdProjectUpdateV30AudienceGender,
        self::GENDER_MALE_StdProjectUpdateV30AudienceGender,
        self::GENDER_UNLIMITED_StdProjectUpdateV30AudienceGender,
        self::NONE_StdProjectUpdateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
