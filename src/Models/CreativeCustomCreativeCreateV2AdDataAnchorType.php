<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataAnchorType
{
    public const APP_SHOP_CreativeCustomCreativeCreateV2AdDataAnchorType = 'APP_SHOP';
    public const INSURANCE_CreativeCustomCreativeCreateV2AdDataAnchorType = 'INSURANCE';
    public const SHOPPING_CART_CreativeCustomCreativeCreateV2AdDataAnchorType = 'SHOPPING_CART';
    public const APP_GAME_CreativeCustomCreativeCreateV2AdDataAnchorType = 'APP_GAME';
    public const PRIVATE_CHAT_CreativeCustomCreativeCreateV2AdDataAnchorType = 'PRIVATE_CHAT';
    public const ONLINE_SUBSCRIBE_CreativeCustomCreativeCreateV2AdDataAnchorType = 'ONLINE_SUBSCRIBE';
    public const APP_INTERNET_SERVICE_CreativeCustomCreativeCreateV2AdDataAnchorType = 'APP_INTERNET_SERVICE';

    public const ALLOWED_VALUES = [
        self::APP_SHOP_CreativeCustomCreativeCreateV2AdDataAnchorType,
        self::INSURANCE_CreativeCustomCreativeCreateV2AdDataAnchorType,
        self::SHOPPING_CART_CreativeCustomCreativeCreateV2AdDataAnchorType,
        self::APP_GAME_CreativeCustomCreativeCreateV2AdDataAnchorType,
        self::PRIVATE_CHAT_CreativeCustomCreativeCreateV2AdDataAnchorType,
        self::ONLINE_SUBSCRIBE_CreativeCustomCreativeCreateV2AdDataAnchorType,
        self::APP_INTERNET_SERVICE_CreativeCustomCreativeCreateV2AdDataAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataAnchorType', $value));
        }
        return (string) $value;
    }
}
