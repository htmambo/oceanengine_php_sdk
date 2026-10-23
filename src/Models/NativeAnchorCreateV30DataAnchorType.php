<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorCreateV30DataAnchorType
{
    public const APP_GAME_NativeAnchorCreateV30DataAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorCreateV30DataAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorCreateV30DataAnchorType = 'APP_SHOP';
    public const MICRO_APP_NativeAnchorCreateV30DataAnchorType = 'MICRO_APP';
    public const ONLINE_SUBSCRIBE_NativeAnchorCreateV30DataAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_NativeAnchorCreateV30DataAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorCreateV30DataAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorCreateV30DataAnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorCreateV30DataAnchorType,
        self::APP_SHOP_NativeAnchorCreateV30DataAnchorType,
        self::MICRO_APP_NativeAnchorCreateV30DataAnchorType,
        self::ONLINE_SUBSCRIBE_NativeAnchorCreateV30DataAnchorType,
        self::PRIVATE_CHAT_NativeAnchorCreateV30DataAnchorType,
        self::SHOPPING_CART_NativeAnchorCreateV30DataAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorCreateV30DataAnchorType', $value));
        }
        return (string) $value;
    }
}
