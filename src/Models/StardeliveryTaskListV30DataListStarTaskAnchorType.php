<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30DataListStarTaskAnchorType
{
    public const APP_GAME_StardeliveryTaskListV30DataListStarTaskAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_StardeliveryTaskListV30DataListStarTaskAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_StardeliveryTaskListV30DataListStarTaskAnchorType = 'APP_SHOP';
    public const INSURANCE_StardeliveryTaskListV30DataListStarTaskAnchorType = 'INSURANCE';
    public const MICRO_APP_StardeliveryTaskListV30DataListStarTaskAnchorType = 'MICRO_APP';
    public const MICRO_GAME_StardeliveryTaskListV30DataListStarTaskAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_StardeliveryTaskListV30DataListStarTaskAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_StardeliveryTaskListV30DataListStarTaskAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_StardeliveryTaskListV30DataListStarTaskAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::APP_INTERNET_SERVICE_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::APP_SHOP_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::INSURANCE_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::MICRO_APP_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::MICRO_GAME_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::ONLINE_SUBSCRIBE_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::PRIVATE_CHAT_StardeliveryTaskListV30DataListStarTaskAnchorType,
        self::SHOPPING_CART_StardeliveryTaskListV30DataListStarTaskAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30DataListStarTaskAnchorType', $value));
        }
        return (string) $value;
    }
}
