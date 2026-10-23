<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30Gender
{
    public const FEMALE_LocalAudiencePackageUpdateV30Gender = 'FEMALE';
    public const MALE_LocalAudiencePackageUpdateV30Gender = 'MALE';
    public const NONE_LocalAudiencePackageUpdateV30Gender = 'NONE';

    public const ALLOWED_VALUES = [
        self::FEMALE_LocalAudiencePackageUpdateV30Gender,
        self::MALE_LocalAudiencePackageUpdateV30Gender,
        self::NONE_LocalAudiencePackageUpdateV30Gender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30Gender', $value));
        }
        return (string) $value;
    }
}
