<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceGender
{
    public const GENDER_FEMALE_StdProjectCreateV30AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_StdProjectCreateV30AudienceGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_StdProjectCreateV30AudienceGender = 'GENDER_UNLIMITED';
    public const NONE_StdProjectCreateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_StdProjectCreateV30AudienceGender,
        self::GENDER_MALE_StdProjectCreateV30AudienceGender,
        self::GENDER_UNLIMITED_StdProjectCreateV30AudienceGender,
        self::NONE_StdProjectCreateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
