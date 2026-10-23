<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType
{
    public const NONE_BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::NONE_BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType,
        self::PLUS_BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType,
        self::PRO_BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderUpdateV30BookingQuantityInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
