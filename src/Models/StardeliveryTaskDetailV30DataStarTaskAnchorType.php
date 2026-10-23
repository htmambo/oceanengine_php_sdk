<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataStarTaskAnchorType
{
    public const APP_GAME_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'APP_GAME';
    public const APP_INTERNET_SERVICE_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'APP_INTERNET_SERVICE';
    public const APP_SHOP_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'APP_SHOP';
    public const INSURANCE_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'INSURANCE';
    public const MICRO_APP_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'MICRO_APP';
    public const MICRO_GAME_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'MICRO_GAME';
    public const ONLINE_SUBSCRIBE_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'ONLINE_SUBSCRIBE';
    public const PRIVATE_CHAT_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'PRIVATE_CHAT';
    public const SHOPPING_CART_StardeliveryTaskDetailV30DataStarTaskAnchorType = 'SHOPPING_CART';

    public const ALLOWED_VALUES = [
        self::APP_GAME_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::APP_INTERNET_SERVICE_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::APP_SHOP_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::INSURANCE_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::MICRO_APP_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::MICRO_GAME_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::ONLINE_SUBSCRIBE_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::PRIVATE_CHAT_StardeliveryTaskDetailV30DataStarTaskAnchorType,
        self::SHOPPING_CART_StardeliveryTaskDetailV30DataStarTaskAnchorType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataStarTaskAnchorType', $value));
        }
        return (string) $value;
    }
}
