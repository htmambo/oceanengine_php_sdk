<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType
{
    public const MAX_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType = 'MAX';
    public const NONE_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::MAX_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType,
        self::NONE_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType,
        self::PLUS_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType,
        self::PRO_BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersBookingQuantityInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
