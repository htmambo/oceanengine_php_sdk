<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorGetV30FilteringAnchorType
{
    public const APP_GAME_NativeAnchorGetV30FilteringAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_NativeAnchorGetV30FilteringAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_NativeAnchorGetV30FilteringAnchorType = 'APP_SHOP';
    public const INSURANCE_NativeAnchorGetV30FilteringAnchorType = 'INSURANCE';
    public const MICRO_APP_NativeAnchorGetV30FilteringAnchorType = 'MICRO_APP';
    public const MICRO_GAME_NativeAnchorGetV30FilteringAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_NativeAnchorGetV30FilteringAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_NativeAnchorGetV30FilteringAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_NativeAnchorGetV30FilteringAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_NativeAnchorGetV30FilteringAnchorType,
        self::APP_INTERNET_SERVICE_NativeAnchorGetV30FilteringAnchorType,
        self::APP_SHOP_NativeAnchorGetV30FilteringAnchorType,
        self::INSURANCE_NativeAnchorGetV30FilteringAnchorType,
        self::MICRO_APP_NativeAnchorGetV30FilteringAnchorType,
        self::MICRO_GAME_NativeAnchorGetV30FilteringAnchorType,
        self::ONLINE_SUBSCRIBE_NativeAnchorGetV30FilteringAnchorType,
        self::PRIVATE_CHAT_NativeAnchorGetV30FilteringAnchorType,
        self::SHOPPING_CART_NativeAnchorGetV30FilteringAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorGetV30FilteringAnchorType', $value));
        }
        return (string) $value;
    }
}
