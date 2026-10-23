<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors
{
    public const COMMENTED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIKED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIVE_COMMENT_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::LIVE_WATCH_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
        self::SHARED_USER_QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
