<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataAnchorType
{
    public const APP_GAME_CreativeDetailGetV30DataAdDataAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_CreativeDetailGetV30DataAdDataAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_CreativeDetailGetV30DataAdDataAnchorType = 'APP_SHOP';
    public const INSURANCE_CreativeDetailGetV30DataAdDataAnchorType = 'INSURANCE';
    public const MICRO_APP_CreativeDetailGetV30DataAdDataAnchorType = 'MICRO_APP';
    public const ONLINE_SUBSCRIBE_CreativeDetailGetV30DataAdDataAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_CreativeDetailGetV30DataAdDataAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_CreativeDetailGetV30DataAdDataAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_CreativeDetailGetV30DataAdDataAnchorType,
        self::APP_INTERNET_SERVICE_CreativeDetailGetV30DataAdDataAnchorType,
        self::APP_SHOP_CreativeDetailGetV30DataAdDataAnchorType,
        self::INSURANCE_CreativeDetailGetV30DataAdDataAnchorType,
        self::MICRO_APP_CreativeDetailGetV30DataAdDataAnchorType,
        self::ONLINE_SUBSCRIBE_CreativeDetailGetV30DataAdDataAnchorType,
        self::PRIVATE_CHAT_CreativeDetailGetV30DataAdDataAnchorType,
        self::SHOPPING_CART_CreativeDetailGetV30DataAdDataAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataAnchorType', $value));
        }
        return (string) $value;
    }
}
