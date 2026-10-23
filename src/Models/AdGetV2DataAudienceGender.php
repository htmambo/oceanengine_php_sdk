<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceGender
{
    public const GENDER_FEMALE_AdGetV2DataAudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_AdGetV2DataAudienceGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_AdGetV2DataAudienceGender = 'GENDER_UNLIMITED';
    public const NONE_AdGetV2DataAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_AdGetV2DataAudienceGender,
        self::GENDER_MALE_AdGetV2DataAudienceGender,
        self::GENDER_UNLIMITED_AdGetV2DataAudienceGender,
        self::NONE_AdGetV2DataAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceGender', $value));
        }
        return (string) $value;
    }
}
