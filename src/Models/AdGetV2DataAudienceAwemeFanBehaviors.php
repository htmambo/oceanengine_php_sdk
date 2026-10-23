<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAwemeFanBehaviors
{
    public const LIVE_EXCEPTIONAL_AdGetV2DataAudienceAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const GOODS_CARTS_ORDER_AdGetV2DataAudienceAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const COMMENTED_USER_AdGetV2DataAudienceAwemeFanBehaviors = 'COMMENTED_USER';
    public const LIVE_GOODS_CLICK_AdGetV2DataAudienceAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const FOLLOWED_USER_AdGetV2DataAudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const LIKED_USER_AdGetV2DataAudienceAwemeFanBehaviors = 'LIKED_USER';
    public const GOODS_CARTS_CLICK_AdGetV2DataAudienceAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const LIVE_EFFECTIVE_WATCH_AdGetV2DataAudienceAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const SHARED_USER_AdGetV2DataAudienceAwemeFanBehaviors = 'SHARED_USER';
    public const LIVE_COMMENT_AdGetV2DataAudienceAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_WATCH_AdGetV2DataAudienceAwemeFanBehaviors = 'LIVE_WATCH';
    public const LIVE_GOODS_ORDER_AdGetV2DataAudienceAwemeFanBehaviors = 'LIVE_GOODS_ORDER';

    public const ALLOWED_VALUES = [
        self::LIVE_EXCEPTIONAL_AdGetV2DataAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_AdGetV2DataAudienceAwemeFanBehaviors,
        self::COMMENTED_USER_AdGetV2DataAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_AdGetV2DataAudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_AdGetV2DataAudienceAwemeFanBehaviors,
        self::LIKED_USER_AdGetV2DataAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_AdGetV2DataAudienceAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_AdGetV2DataAudienceAwemeFanBehaviors,
        self::SHARED_USER_AdGetV2DataAudienceAwemeFanBehaviors,
        self::LIVE_COMMENT_AdGetV2DataAudienceAwemeFanBehaviors,
        self::LIVE_WATCH_AdGetV2DataAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_AdGetV2DataAudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
