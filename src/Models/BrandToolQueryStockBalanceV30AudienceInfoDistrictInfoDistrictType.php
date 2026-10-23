<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoDistrictType
{
    public const REGION_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoDistrictType = 'REGION';
    public const UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoDistrictType = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::REGION_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoDistrictType,
        self::UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoDistrictType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoDistrictInfoDistrictType', $value));
        }
        return (string) $value;
    }
}
