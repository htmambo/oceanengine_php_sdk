<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30AudienceInfoGender
{
    public const FEMALE_BrandOrderUpdateV30AudienceInfoGender = 'FEMALE';
    public const MALE_BrandOrderUpdateV30AudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandOrderUpdateV30AudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandOrderUpdateV30AudienceInfoGender,
        self::MALE_BrandOrderUpdateV30AudienceInfoGender,
        self::UNLIMITED_BrandOrderUpdateV30AudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30AudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
