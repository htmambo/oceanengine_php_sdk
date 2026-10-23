<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoAc
{
    public const UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoAc = 'UNLIMITED';
    public const WIFI_BrandToolQueryStockBalanceV30AudienceInfoAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoAc,
        self::WIFI_BrandToolQueryStockBalanceV30AudienceInfoAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoAc', $value));
        }
        return (string) $value;
    }
}
