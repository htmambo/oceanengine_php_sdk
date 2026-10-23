<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30DeliveryInfoStockIncreasePackageType
{
    public const NONE_BrandPolicyListV30DeliveryInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandPolicyListV30DeliveryInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandPolicyListV30DeliveryInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::NONE_BrandPolicyListV30DeliveryInfoStockIncreasePackageType,
        self::PLUS_BrandPolicyListV30DeliveryInfoStockIncreasePackageType,
        self::PRO_BrandPolicyListV30DeliveryInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30DeliveryInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
