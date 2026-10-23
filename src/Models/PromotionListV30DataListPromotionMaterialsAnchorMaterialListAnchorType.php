<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType
{
    public const APP_GAME_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'INSURANCE';
    public const ONLINE_SUBSCRIBE_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
        self::APP_SHOP_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
        self::INSURANCE_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
        self::SHOPPING_CART_PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
