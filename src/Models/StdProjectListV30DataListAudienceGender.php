<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceGender
{
    public const GENDER_FEMALE_StdProjectListV30DataListAudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_StdProjectListV30DataListAudienceGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_StdProjectListV30DataListAudienceGender = 'GENDER_UNLIMITED';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_StdProjectListV30DataListAudienceGender,
        self::GENDER_MALE_StdProjectListV30DataListAudienceGender,
        self::GENDER_UNLIMITED_StdProjectListV30DataListAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceGender', $value));
        }
        return (string) $value;
    }
}
