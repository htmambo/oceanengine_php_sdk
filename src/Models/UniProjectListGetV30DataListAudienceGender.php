<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAudienceGender
{
    public const GENDER_FEMALE_UniProjectListGetV30DataListAudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_UniProjectListGetV30DataListAudienceGender = 'GENDER_MALE';
    public const NONE_UniProjectListGetV30DataListAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_UniProjectListGetV30DataListAudienceGender,
        self::GENDER_MALE_UniProjectListGetV30DataListAudienceGender,
        self::NONE_UniProjectListGetV30DataListAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAudienceGender', $value));
        }
        return (string) $value;
    }
}
