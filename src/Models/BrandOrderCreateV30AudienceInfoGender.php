<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AudienceInfoGender
{
    public const FEMALE_BrandOrderCreateV30AudienceInfoGender = 'FEMALE';
    public const MALE_BrandOrderCreateV30AudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandOrderCreateV30AudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandOrderCreateV30AudienceInfoGender,
        self::MALE_BrandOrderCreateV30AudienceInfoGender,
        self::UNLIMITED_BrandOrderCreateV30AudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
