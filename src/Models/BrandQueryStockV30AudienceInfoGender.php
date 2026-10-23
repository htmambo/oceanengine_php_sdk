<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AudienceInfoGender
{
    public const FEMALE_BrandQueryStockV30AudienceInfoGender = 'FEMALE';
    public const MALE_BrandQueryStockV30AudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandQueryStockV30AudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandQueryStockV30AudienceInfoGender,
        self::MALE_BrandQueryStockV30AudienceInfoGender,
        self::UNLIMITED_BrandQueryStockV30AudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
