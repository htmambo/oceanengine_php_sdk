<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10AudienceBehaviors
{
    public const ALL_QianchuanAwemeOrderCreateV10AudienceBehaviors = 'ALL';
    public const FOLLOWED_USER_QianchuanAwemeOrderCreateV10AudienceBehaviors = 'FOLLOWED_USER';
    public const GOODS_SHARE_QianchuanAwemeOrderCreateV10AudienceBehaviors = 'GOODS_SHARE';
    public const LIKED_USER_QianchuanAwemeOrderCreateV10AudienceBehaviors = 'LIKED_USER';
    public const LIVE_WATCH_QianchuanAwemeOrderCreateV10AudienceBehaviors = 'LIVE_WATCH';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeOrderCreateV10AudienceBehaviors,
        self::FOLLOWED_USER_QianchuanAwemeOrderCreateV10AudienceBehaviors,
        self::GOODS_SHARE_QianchuanAwemeOrderCreateV10AudienceBehaviors,
        self::LIKED_USER_QianchuanAwemeOrderCreateV10AudienceBehaviors,
        self::LIVE_WATCH_QianchuanAwemeOrderCreateV10AudienceBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10AudienceBehaviors', $value));
        }
        return (string) $value;
    }
}
