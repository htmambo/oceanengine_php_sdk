<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOperationLogQueryV30Fields
{
    public const CAMPAIGN_BrandOperationLogQueryV30Fields = 'Campaign';
    public const MATERIAL_BrandOperationLogQueryV30Fields = 'Material';
    public const ORDER_BrandOperationLogQueryV30Fields = 'Order';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_BrandOperationLogQueryV30Fields,
        self::MATERIAL_BrandOperationLogQueryV30Fields,
        self::ORDER_BrandOperationLogQueryV30Fields,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOperationLogQueryV30Fields', $value));
        }
        return (string) $value;
    }
}
