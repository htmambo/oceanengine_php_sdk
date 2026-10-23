<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType
{
    public const APP_GAME_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'INSURANCE';
    public const ONLINE_SUBSCRIBE_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::APP_SHOP_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::INSURANCE_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::SHOPPING_CART_PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
