<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors
{
    public const COMMENTED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIKED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_COMMENT_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_WATCH_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
        self::SHARED_USER_QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
