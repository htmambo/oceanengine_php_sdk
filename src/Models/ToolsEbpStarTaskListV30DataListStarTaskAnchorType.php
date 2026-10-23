<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskListV30DataListStarTaskAnchorType
{
    public const APP_GAME_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'APP_SHOP';
    public const INSURANCE_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'INSURANCE';
    public const MICRO_APP_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'MICRO_APP';
    public const MICRO_GAME_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_ToolsEbpStarTaskListV30DataListStarTaskAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::APP_INTERNET_SERVICE_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::APP_SHOP_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::INSURANCE_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::MICRO_APP_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::MICRO_GAME_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::ONLINE_SUBSCRIBE_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::PRIVATE_CHAT_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
        self::SHOPPING_CART_ToolsEbpStarTaskListV30DataListStarTaskAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskListV30DataListStarTaskAnchorType', $value));
        }
        return (string) $value;
    }
}
