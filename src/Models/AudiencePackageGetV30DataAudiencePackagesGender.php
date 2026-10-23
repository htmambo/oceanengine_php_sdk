<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesGender
{
    public const GENDER_FEMALE_AudiencePackageGetV30DataAudiencePackagesGender = 'GENDER_FEMALE';
    public const GENDER_MALE_AudiencePackageGetV30DataAudiencePackagesGender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_AudiencePackageGetV30DataAudiencePackagesGender = 'GENDER_UNLIMITED';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_AudiencePackageGetV30DataAudiencePackagesGender,
        self::GENDER_MALE_AudiencePackageGetV30DataAudiencePackagesGender,
        self::GENDER_UNLIMITED_AudiencePackageGetV30DataAudiencePackagesGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesGender', $value));
        }
        return (string) $value;
    }
}
