<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceAwemeFanBehaviors
{
    public const COMMENTED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIKED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIVE_COMMENT_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::LIVE_WATCH_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
        self::SHARED_USER_QianchuanAdUpdateV10AudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
