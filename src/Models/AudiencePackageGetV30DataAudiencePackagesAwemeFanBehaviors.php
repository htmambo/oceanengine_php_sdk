<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors
{
    public const COMMENTED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::FOLLOWED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIKED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIVE_COMMENT_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::LIVE_WATCH_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
        self::SHARED_USER_AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
