<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors
{
    public const ALL_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors = 'ALL';
    public const FOLLOWED_USER_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_SHARE_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors = 'GOODS_SHARE';
    public const LIKED_USER_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_WATCH_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors = 'LIVE_WATCH';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors,
        self::GOODS_SHARE_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIKED_USER_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors,
        self::LIVE_WATCH_QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataAudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
