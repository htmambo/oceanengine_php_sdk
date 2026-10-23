<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType
{
    public const APP_GAME_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'APP_SHOP';
    public const INSURANCE_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'INSURANCE';
    public const ONLINE_SUBSCRIBE_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
        self::APP_INTERNET_SERVICE_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
        self::APP_SHOP_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
        self::INSURANCE_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
        self::ONLINE_SUBSCRIBE_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
        self::PRIVATE_CHAT_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
        self::SHOPPING_CART_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialListAnchorMaterialListAnchorType', $value));
        }
        return (string) $value;
    }
}
