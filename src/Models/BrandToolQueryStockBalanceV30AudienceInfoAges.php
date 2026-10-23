<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoAges
{
    public const ABOVE50_BrandToolQueryStockBalanceV30AudienceInfoAges = 'ABOVE50';
    public const BETWEEN18_23_BrandToolQueryStockBalanceV30AudienceInfoAges = 'BETWEEN18_23';
    public const BETWEEN24_30_BrandToolQueryStockBalanceV30AudienceInfoAges = 'BETWEEN24_30';
    public const BETWEEN31_40_BrandToolQueryStockBalanceV30AudienceInfoAges = 'BETWEEN31_40';
    public const BETWEEN41_49_BrandToolQueryStockBalanceV30AudienceInfoAges = 'BETWEEN41_49';
    public const UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoAges = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ABOVE50_BrandToolQueryStockBalanceV30AudienceInfoAges,
        self::BETWEEN18_23_BrandToolQueryStockBalanceV30AudienceInfoAges,
        self::BETWEEN24_30_BrandToolQueryStockBalanceV30AudienceInfoAges,
        self::BETWEEN31_40_BrandToolQueryStockBalanceV30AudienceInfoAges,
        self::BETWEEN41_49_BrandToolQueryStockBalanceV30AudienceInfoAges,
        self::UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoAges,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoAges', $value));
        }
        return (string) $value;
    }
}
