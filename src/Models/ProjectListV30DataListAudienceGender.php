<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceGender
{
    public const GENDER_FEMALE_ProjectListV30DataListAudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_ProjectListV30DataListAudienceGender = 'GENDER_MALE';
    public const NONE_ProjectListV30DataListAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_ProjectListV30DataListAudienceGender,
        self::GENDER_MALE_ProjectListV30DataListAudienceGender,
        self::NONE_ProjectListV30DataListAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceGender', $value));
        }
        return (string) $value;
    }
}
