<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataAnchorMaterialListAnchorType
{
    public const APP_GAME_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'INSURANCE';
    public const ONLINE_SUBSCRIBE_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
        self::APP_SHOP_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
        self::INSURANCE_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
        self::SHOPPING_CART_OcProjectMaterialGetV30DataAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
