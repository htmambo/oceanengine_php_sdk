<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors
{
    public const COMMENTED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::FOLLOWED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIKED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIVE_COMMENT_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::LIVE_WATCH_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
        self::SHARED_USER_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
