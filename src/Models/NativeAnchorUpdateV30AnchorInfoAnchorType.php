<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorUpdateV30AnchorInfoAnchorType
{
    public const APP_GAME_NativeAnchorUpdateV30AnchorInfoAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorUpdateV30AnchorInfoAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorUpdateV30AnchorInfoAnchorType = 'APP_SHOP';
    public const PRIVATE_CHAT_NativeAnchorUpdateV30AnchorInfoAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorUpdateV30AnchorInfoAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorUpdateV30AnchorInfoAnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorUpdateV30AnchorInfoAnchorType,
        self::APP_SHOP_NativeAnchorUpdateV30AnchorInfoAnchorType,
        self::PRIVATE_CHAT_NativeAnchorUpdateV30AnchorInfoAnchorType,
        self::SHOPPING_CART_NativeAnchorUpdateV30AnchorInfoAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorUpdateV30AnchorInfoAnchorType', $value));
        }
        return (string) $value;
    }
}
