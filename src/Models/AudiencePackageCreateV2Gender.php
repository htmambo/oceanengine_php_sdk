<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2Gender
{
    public const GENDER_FEMALE_AudiencePackageCreateV2Gender = 'GENDER_FEMALE';
    public const GENDER_MALE_AudiencePackageCreateV2Gender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_AudiencePackageCreateV2Gender = 'GENDER_UNLIMITED';
    public const NONE_AudiencePackageCreateV2Gender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_AudiencePackageCreateV2Gender,
        self::GENDER_MALE_AudiencePackageCreateV2Gender,
        self::GENDER_UNLIMITED_AudiencePackageCreateV2Gender,
        self::NONE_AudiencePackageCreateV2Gender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2Gender', $value));
        }
        return (string) $value;
    }
}
