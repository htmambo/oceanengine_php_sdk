<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType
{
    public const NONE_BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::NONE_BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType,
        self::PLUS_BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType,
        self::PRO_BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30BookingQuantityInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
