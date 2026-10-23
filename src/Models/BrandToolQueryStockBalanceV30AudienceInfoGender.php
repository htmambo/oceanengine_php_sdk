<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoGender
{
    public const FEMALE_BrandToolQueryStockBalanceV30AudienceInfoGender = 'FEMALE';
    public const MALE_BrandToolQueryStockBalanceV30AudienceInfoGender = 'MALE';
    public const UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoGender = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FEMALE_BrandToolQueryStockBalanceV30AudienceInfoGender,
        self::MALE_BrandToolQueryStockBalanceV30AudienceInfoGender,
        self::UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoGender', $value));
        }
        return (string) $value;
    }
}
