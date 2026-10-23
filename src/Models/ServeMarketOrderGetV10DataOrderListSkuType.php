<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ServeMarketOrderGetV10DataOrderListSkuType
{
    public const FREE_ServeMarketOrderGetV10DataOrderListSkuType = 'FREE';
    public const TRY_ServeMarketOrderGetV10DataOrderListSkuType = 'TRY';
    public const PAY_ServeMarketOrderGetV10DataOrderListSkuType = 'PAY';

    public const ALLOWED_VALUES = [
        self::FREE_ServeMarketOrderGetV10DataOrderListSkuType,
        self::TRY_ServeMarketOrderGetV10DataOrderListSkuType,
        self::PAY_ServeMarketOrderGetV10DataOrderListSkuType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ServeMarketOrderGetV10DataOrderListSkuType', $value));
        }
        return (string) $value;
    }
}
