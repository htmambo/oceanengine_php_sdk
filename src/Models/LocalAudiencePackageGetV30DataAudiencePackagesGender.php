<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesGender
{
    public const FEMALE_LocalAudiencePackageGetV30DataAudiencePackagesGender = 'FEMALE';
    public const MALE_LocalAudiencePackageGetV30DataAudiencePackagesGender = 'MALE';
    public const NONE_LocalAudiencePackageGetV30DataAudiencePackagesGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::FEMALE_LocalAudiencePackageGetV30DataAudiencePackagesGender,
        self::MALE_LocalAudiencePackageGetV30DataAudiencePackagesGender,
        self::NONE_LocalAudiencePackageGetV30DataAudiencePackagesGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesGender', $value));
        }
        return (string) $value;
    }
}
