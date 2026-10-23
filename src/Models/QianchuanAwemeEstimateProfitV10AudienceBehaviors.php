<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10AudienceBehaviors
{
    public const ALL_QianchuanAwemeEstimateProfitV10AudienceBehaviors = 'ALL';
    public const FOLLOWED_USER_QianchuanAwemeEstimateProfitV10AudienceBehaviors = 'FOLLOWED_USER';
    public const GOODS_SHARE_QianchuanAwemeEstimateProfitV10AudienceBehaviors = 'GOODS_SHARE';
    public const LIKED_USER_QianchuanAwemeEstimateProfitV10AudienceBehaviors = 'LIKED_USER';
    public const LIVE_WATCH_QianchuanAwemeEstimateProfitV10AudienceBehaviors = 'LIVE_WATCH';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeEstimateProfitV10AudienceBehaviors,
        self::FOLLOWED_USER_QianchuanAwemeEstimateProfitV10AudienceBehaviors,
        self::GOODS_SHARE_QianchuanAwemeEstimateProfitV10AudienceBehaviors,
        self::LIKED_USER_QianchuanAwemeEstimateProfitV10AudienceBehaviors,
        self::LIVE_WATCH_QianchuanAwemeEstimateProfitV10AudienceBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10AudienceBehaviors', $value));
        }
        return (string) $value;
    }
}
