<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30AudienceInfoGender
{
    public const FEMALE_BrandToolQueryPublishPriceV30AudienceInfoGender = 'FEMALE';
    public const MALE_BrandToolQueryPublishPriceV30AudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandToolQueryPublishPriceV30AudienceInfoGender,
        self::MALE_BrandToolQueryPublishPriceV30AudienceInfoGender,
        self::UNLIMITED_BrandToolQueryPublishPriceV30AudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30AudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
