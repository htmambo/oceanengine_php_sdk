<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2AwemeFanBehaviors
{
    public const LIVE_EXCEPTIONAL_AudiencePackageCreateV2AwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const GOODS_CARTS_ORDER_AudiencePackageCreateV2AwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const COMMENTED_USER_AudiencePackageCreateV2AwemeFanBehaviors = 'COMMENTED_USER';
    public const LIVE_GOODS_CLICK_AudiencePackageCreateV2AwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const FOLLOWED_USER_AudiencePackageCreateV2AwemeFanBehaviors = 'FOLLOWED_USER';
    public const LIKED_USER_AudiencePackageCreateV2AwemeFanBehaviors = 'LIKED_USER';
    public const GOODS_CARTS_CLICK_AudiencePackageCreateV2AwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const LIVE_EFFECTIVE_WATCH_AudiencePackageCreateV2AwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const SHARED_USER_AudiencePackageCreateV2AwemeFanBehaviors = 'SHARED_USER';
    public const LIVE_COMMENT_AudiencePackageCreateV2AwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_WATCH_AudiencePackageCreateV2AwemeFanBehaviors = 'LIVE_WATCH';
    public const LIVE_GOODS_ORDER_AudiencePackageCreateV2AwemeFanBehaviors = 'LIVE_GOODS_ORDER';

    public const ALLOWED_VALUES = [
        self::LIVE_EXCEPTIONAL_AudiencePackageCreateV2AwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_AudiencePackageCreateV2AwemeFanBehaviors,
        self::COMMENTED_USER_AudiencePackageCreateV2AwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_AudiencePackageCreateV2AwemeFanBehaviors,
        self::FOLLOWED_USER_AudiencePackageCreateV2AwemeFanBehaviors,
        self::LIKED_USER_AudiencePackageCreateV2AwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_AudiencePackageCreateV2AwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_AudiencePackageCreateV2AwemeFanBehaviors,
        self::SHARED_USER_AudiencePackageCreateV2AwemeFanBehaviors,
        self::LIVE_COMMENT_AudiencePackageCreateV2AwemeFanBehaviors,
        self::LIVE_WATCH_AudiencePackageCreateV2AwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_AudiencePackageCreateV2AwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2AwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
