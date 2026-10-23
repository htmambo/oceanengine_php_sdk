<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ShopBonusCreateV30CouponShopPlatform
{
    public const ALIHEALTH_ShopBonusCreateV30CouponShopPlatform = 'ALIHEALTH';
    public const ALIMAMA_UD_ShopBonusCreateV30CouponShopPlatform = 'ALIMAMA_UD';
    public const HELIANG_ShopBonusCreateV30CouponShopPlatform = 'HELIANG';
    public const JD_ShopBonusCreateV30CouponShopPlatform = 'JD';

    public const ALLOWED_VALUES = [
        self::ALIHEALTH_ShopBonusCreateV30CouponShopPlatform,
        self::ALIMAMA_UD_ShopBonusCreateV30CouponShopPlatform,
        self::HELIANG_ShopBonusCreateV30CouponShopPlatform,
        self::JD_ShopBonusCreateV30CouponShopPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ShopBonusCreateV30CouponShopPlatform', $value));
        }
        return (string) $value;
    }
}
