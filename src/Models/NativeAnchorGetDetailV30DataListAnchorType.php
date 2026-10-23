<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30DataListAnchorType
{
    public const APP_GAME_NativeAnchorGetDetailV30DataListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorGetDetailV30DataListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorGetDetailV30DataListAnchorType = 'APP_SHOP';
    public const INSURANCE_NativeAnchorGetDetailV30DataListAnchorType = 'INSURANCE';
    public const MICRO_APP_NativeAnchorGetDetailV30DataListAnchorType = 'MICRO_APP';
    public const MICRO_GAME_NativeAnchorGetDetailV30DataListAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_NativeAnchorGetDetailV30DataListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_NativeAnchorGetDetailV30DataListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorGetDetailV30DataListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorGetDetailV30DataListAnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorGetDetailV30DataListAnchorType,
        self::APP_SHOP_NativeAnchorGetDetailV30DataListAnchorType,
        self::INSURANCE_NativeAnchorGetDetailV30DataListAnchorType,
        self::MICRO_APP_NativeAnchorGetDetailV30DataListAnchorType,
        self::MICRO_GAME_NativeAnchorGetDetailV30DataListAnchorType,
        self::ONLINE_SUBSCRIBE_NativeAnchorGetDetailV30DataListAnchorType,
        self::PRIVATE_CHAT_NativeAnchorGetDetailV30DataListAnchorType,
        self::SHOPPING_CART_NativeAnchorGetDetailV30DataListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30DataListAnchorType', $value));
        }
        return (string) $value;
    }
}
