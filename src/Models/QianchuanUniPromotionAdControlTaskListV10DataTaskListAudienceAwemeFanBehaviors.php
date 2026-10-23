<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors
{
    public const COMMENTED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIKED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIVE_COMMENT_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::LIVE_WATCH_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
        self::SHARED_USER_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
