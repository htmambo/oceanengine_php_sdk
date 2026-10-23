<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthorInfoGetV2Behaviors
{
    public const LIVE_EXCEPTIONAL_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIVE_EXCEPTIONAL';
    public const GOODS_CARTS_ORDER_ToolsAwemeAuthorInfoGetV2Behaviors = 'GOODS_CARTS_ORDER';
    public const COMMENTED_USER_ToolsAwemeAuthorInfoGetV2Behaviors = 'COMMENTED_USER';
    public const LIVE_GOODS_CLICK_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIVE_GOODS_CLICK';
    public const FOLLOWED_USER_ToolsAwemeAuthorInfoGetV2Behaviors = 'FOLLOWED_USER';
    public const LIKED_USER_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIKED_USER';
    public const GOODS_CARTS_CLICK_ToolsAwemeAuthorInfoGetV2Behaviors = 'GOODS_CARTS_CLICK';
    public const LIVE_EFFECTIVE_WATCH_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIVE_EFFECTIVE_WATCH';
    public const SHARED_USER_ToolsAwemeAuthorInfoGetV2Behaviors = 'SHARED_USER';
    public const LIVE_COMMENT_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIVE_COMMENT';
    public const LIVE_WATCH_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIVE_WATCH';
    public const LIVE_GOODS_ORDER_ToolsAwemeAuthorInfoGetV2Behaviors = 'LIVE_GOODS_ORDER';

    public const ALLOWED_VALUES = [
        self::LIVE_EXCEPTIONAL_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::GOODS_CARTS_ORDER_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::COMMENTED_USER_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::LIVE_GOODS_CLICK_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::FOLLOWED_USER_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::LIKED_USER_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::GOODS_CARTS_CLICK_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::LIVE_EFFECTIVE_WATCH_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::SHARED_USER_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::LIVE_COMMENT_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::LIVE_WATCH_ToolsAwemeAuthorInfoGetV2Behaviors,
        self::LIVE_GOODS_ORDER_ToolsAwemeAuthorInfoGetV2Behaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthorInfoGetV2Behaviors', $value));
        }
        return (string) $value;
    }
}
