<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType
{
    public const APP_GAME_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'INSURANCE';
    public const ONLINE_SUBSCRIBE_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::APP_SHOP_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::INSURANCE_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
        self::SHOPPING_CART_PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
