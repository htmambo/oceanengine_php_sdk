<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType
{
    public const NONE_BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::NONE_BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType,
        self::PLUS_BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType,
        self::PRO_BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30DeliveryInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
