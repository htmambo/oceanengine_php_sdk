<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceGender
{
    public const GENDER_FEMALE_ProjectCreateV30AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_ProjectCreateV30AudienceGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_ProjectCreateV30AudienceGender = 'GENDER_UNLIMITED';
    public const NONE_ProjectCreateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_ProjectCreateV30AudienceGender,
        self::GENDER_MALE_ProjectCreateV30AudienceGender,
        self::GENDER_UNLIMITED_ProjectCreateV30AudienceGender,
        self::NONE_ProjectCreateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
