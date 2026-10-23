<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType
{
    public const APP_GAME_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'INSURANCE';
    public const MICRO_GAME_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::APP_SHOP_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::INSURANCE_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::MICRO_GAME_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
        self::SHOPPING_CART_PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionRelatedProductAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
