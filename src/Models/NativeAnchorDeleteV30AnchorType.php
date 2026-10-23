<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorDeleteV30AnchorType
{
    public const APP_GAME_NativeAnchorDeleteV30AnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorDeleteV30AnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorDeleteV30AnchorType = 'APP_SHOP';
    public const INSURANCE_NativeAnchorDeleteV30AnchorType = 'INSURANCE';
    public const ONLINE_SUBSCRIBE_NativeAnchorDeleteV30AnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_NativeAnchorDeleteV30AnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorDeleteV30AnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorDeleteV30AnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorDeleteV30AnchorType,
        self::APP_SHOP_NativeAnchorDeleteV30AnchorType,
        self::INSURANCE_NativeAnchorDeleteV30AnchorType,
        self::ONLINE_SUBSCRIBE_NativeAnchorDeleteV30AnchorType,
        self::PRIVATE_CHAT_NativeAnchorDeleteV30AnchorType,
        self::SHOPPING_CART_NativeAnchorDeleteV30AnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorDeleteV30AnchorType', $value));
        }
        return (string) $value;
    }
}
