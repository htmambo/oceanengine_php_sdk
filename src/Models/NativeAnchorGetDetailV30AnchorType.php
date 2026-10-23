<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetDetailV30AnchorType
{
    public const APP_GAME_NativeAnchorGetDetailV30AnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorGetDetailV30AnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorGetDetailV30AnchorType = 'APP_SHOP';
    public const INSURANCE_NativeAnchorGetDetailV30AnchorType = 'INSURANCE';
    public const MICRO_APP_NativeAnchorGetDetailV30AnchorType = 'MICRO_APP';
    public const MICRO_GAME_NativeAnchorGetDetailV30AnchorType = 'MICRO_GAME';
    public const PRIVATE_CHAT_NativeAnchorGetDetailV30AnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorGetDetailV30AnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorGetDetailV30AnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorGetDetailV30AnchorType,
        self::APP_SHOP_NativeAnchorGetDetailV30AnchorType,
        self::INSURANCE_NativeAnchorGetDetailV30AnchorType,
        self::MICRO_APP_NativeAnchorGetDetailV30AnchorType,
        self::MICRO_GAME_NativeAnchorGetDetailV30AnchorType,
        self::PRIVATE_CHAT_NativeAnchorGetDetailV30AnchorType,
        self::SHOPPING_CART_NativeAnchorGetDetailV30AnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetDetailV30AnchorType', $value));
        }
        return (string) $value;
    }
}
