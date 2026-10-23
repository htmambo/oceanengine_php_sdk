<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ShopBonusCreateV30CouponType
{
    public const DISCOUNT_ShopBonusCreateV30CouponType = 'DISCOUNT';
    public const FIXED_AMOUNT_ShopBonusCreateV30CouponType = 'FIXED_AMOUNT';

    public const ALLOWED_VALUES = [
        self::DISCOUNT_ShopBonusCreateV30CouponType,
        self::FIXED_AMOUNT_ShopBonusCreateV30CouponType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ShopBonusCreateV30CouponType', $value));
        }
        return (string) $value;
    }
}
