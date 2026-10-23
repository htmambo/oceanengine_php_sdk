<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeInfoSearchV2Behaviors
{
    public const COMMENTED_USER_ToolsAwemeInfoSearchV2Behaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_ToolsAwemeInfoSearchV2Behaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_ToolsAwemeInfoSearchV2Behaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_ToolsAwemeInfoSearchV2Behaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_ToolsAwemeInfoSearchV2Behaviors = 'LIKED_USER';
    public const LIVE_COMMENT_ToolsAwemeInfoSearchV2Behaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_ToolsAwemeInfoSearchV2Behaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_ToolsAwemeInfoSearchV2Behaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_ToolsAwemeInfoSearchV2Behaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_ToolsAwemeInfoSearchV2Behaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_ToolsAwemeInfoSearchV2Behaviors = 'LIVE_WATCH';
    public const SHARED_USER_ToolsAwemeInfoSearchV2Behaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_ToolsAwemeInfoSearchV2Behaviors,
        self::FOLLOWED_USER_ToolsAwemeInfoSearchV2Behaviors,
        self::GOODS_CARTS_CLICK_ToolsAwemeInfoSearchV2Behaviors,
        self::GOODS_CARTS_ORDER_ToolsAwemeInfoSearchV2Behaviors,
        self::LIKED_USER_ToolsAwemeInfoSearchV2Behaviors,
        self::LIVE_COMMENT_ToolsAwemeInfoSearchV2Behaviors,
        self::LIVE_EFFECTIVE_WATCH_ToolsAwemeInfoSearchV2Behaviors,
        self::LIVE_EXCEPTIONAL_ToolsAwemeInfoSearchV2Behaviors,
        self::LIVE_GOODS_CLICK_ToolsAwemeInfoSearchV2Behaviors,
        self::LIVE_GOODS_ORDER_ToolsAwemeInfoSearchV2Behaviors,
        self::LIVE_WATCH_ToolsAwemeInfoSearchV2Behaviors,
        self::SHARED_USER_ToolsAwemeInfoSearchV2Behaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeInfoSearchV2Behaviors', $value));
        }
        return (string) $value;
    }
}
