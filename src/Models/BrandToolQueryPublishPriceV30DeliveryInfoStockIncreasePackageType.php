<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType
{
    public const NONE_BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::NONE_BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType,
        self::PLUS_BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType,
        self::PRO_BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30DeliveryInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
