<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType
{
    public const APP_GAME_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'INSURANCE';
    public const MICRO_APP_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'MICRO_APP';
    public const MICRO_GAME_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::APP_SHOP_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::INSURANCE_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::MICRO_APP_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::MICRO_GAME_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
        self::SHOPPING_CART_StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30ProjectMaterialsAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
