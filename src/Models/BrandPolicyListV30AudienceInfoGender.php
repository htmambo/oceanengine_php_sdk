<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30AudienceInfoGender
{
    public const FEMALE_BrandPolicyListV30AudienceInfoGender = 'FEMALE';
    public const MALE_BrandPolicyListV30AudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandPolicyListV30AudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandPolicyListV30AudienceInfoGender,
        self::MALE_BrandPolicyListV30AudienceInfoGender,
        self::UNLIMITED_BrandPolicyListV30AudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30AudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
