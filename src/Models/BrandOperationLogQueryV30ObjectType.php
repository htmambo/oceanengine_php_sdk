<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOperationLogQueryV30ObjectType
{
    public const CAMPAIGN_BrandOperationLogQueryV30ObjectType = 'Campaign';
    public const ORDER_BrandOperationLogQueryV30ObjectType = 'Order';

    public const ALLOWED_VALUES = [
        self::CAMPAIGN_BrandOperationLogQueryV30ObjectType,
        self::ORDER_BrandOperationLogQueryV30ObjectType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOperationLogQueryV30ObjectType', $value));
        }
        return (string) $value;
    }
}
