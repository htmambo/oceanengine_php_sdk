<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeCreateV2AdDataAnchorType
{
    public const APP_SHOP_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'APP_SHOP';
    public const INSURANCE_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'INSURANCE';
    public const SHOPPING_CART_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'SHOPPING_CART';
    public const APP_GAME_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'APP_GAME';
    public const PRIVATE_CHAT_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'PRIVATE_CHAT';
    public const ONLINE_SUBSCRIBE_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'ONLINE_SUBSCRIBE';
    public const APP_INTERNET_SERVICE_CreativeProceduralCreativeCreateV2AdDataAnchorType = 'APP_INTERNET_SERVICE';

    public const ALLOWED_VALUES = [
        self::APP_SHOP_CreativeProceduralCreativeCreateV2AdDataAnchorType,
        self::INSURANCE_CreativeProceduralCreativeCreateV2AdDataAnchorType,
        self::SHOPPING_CART_CreativeProceduralCreativeCreateV2AdDataAnchorType,
        self::APP_GAME_CreativeProceduralCreativeCreateV2AdDataAnchorType,
        self::PRIVATE_CHAT_CreativeProceduralCreativeCreateV2AdDataAnchorType,
        self::ONLINE_SUBSCRIBE_CreativeProceduralCreativeCreateV2AdDataAnchorType,
        self::APP_INTERNET_SERVICE_CreativeProceduralCreativeCreateV2AdDataAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeCreateV2AdDataAnchorType', $value));
        }
        return (string) $value;
    }
}
