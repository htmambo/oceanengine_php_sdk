<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2Gender
{
    public const GENDER_FEMALE_AudiencePackageUpdateV2Gender = 'GENDER_FEMALE';
    public const GENDER_MALE_AudiencePackageUpdateV2Gender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_AudiencePackageUpdateV2Gender = 'GENDER_UNLIMITED';
    public const NONE_AudiencePackageUpdateV2Gender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_AudiencePackageUpdateV2Gender,
        self::GENDER_MALE_AudiencePackageUpdateV2Gender,
        self::GENDER_UNLIMITED_AudiencePackageUpdateV2Gender,
        self::NONE_AudiencePackageUpdateV2Gender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2Gender', $value));
        }
        return (string) $value;
    }
}
