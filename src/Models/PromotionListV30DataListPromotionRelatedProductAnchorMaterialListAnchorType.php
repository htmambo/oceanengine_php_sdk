<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType
{
    public const APP_GAME_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'INSURANCE';
    public const MICRO_APP_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'MICRO_APP';
    public const MICRO_GAME_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::APP_SHOP_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::INSURANCE_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::MICRO_APP_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::MICRO_GAME_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
        self::SHOPPING_CART_PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
