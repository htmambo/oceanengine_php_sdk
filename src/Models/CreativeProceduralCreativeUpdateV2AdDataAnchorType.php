<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeUpdateV2AdDataAnchorType
{
    public const APP_SHOP_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'APP_SHOP';
    public const INSURANCE_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'INSURANCE';
    public const SHOPPING_CART_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'SHOPPING_CART';
    public const APP_GAME_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'APP_GAME';
    public const PRIVATE_CHAT_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'PRIVATE_CHAT';
    public const ONLINE_SUBSCRIBE_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'ONLINE_SUBSCRIBE';
    public const APP_INTERNET_SERVICE_CreativeProceduralCreativeUpdateV2AdDataAnchorType = 'APP_INTERNET_SERVICE';

    public const ALLOWED_VALUES = [
        self::APP_SHOP_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
        self::INSURANCE_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
        self::SHOPPING_CART_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
        self::APP_GAME_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
        self::PRIVATE_CHAT_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
        self::ONLINE_SUBSCRIBE_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
        self::APP_INTERNET_SERVICE_CreativeProceduralCreativeUpdateV2AdDataAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeUpdateV2AdDataAnchorType', $value));
        }
        return (string) $value;
    }
}
