<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringStatusSecond
{
    public const AUDIT_PromotionListV30FilteringStatusSecond = 'AUDIT';
    public const AUDIT_DENY_PromotionListV30FilteringStatusSecond = 'AUDIT_DENY';
    public const AVATAR_DISABLED_PromotionListV30FilteringStatusSecond = 'AVATAR_DISABLED';
    public const AWEME_ACCOUNT_DISABLED_PromotionListV30FilteringStatusSecond = 'AWEME_ACCOUNT_DISABLED';
    public const AWEME_ANCHOR_DISABLED_PromotionListV30FilteringStatusSecond = 'AWEME_ANCHOR_DISABLED';
    public const BALANCE_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond = 'BALANCE_OFFLINE_BUDGET';
    public const BUDGET_GROUP_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond = 'BUDGET_GROUP_OFFLINE_BUDGET';
    public const DISABLED_PromotionListV30FilteringStatusSecond = 'DISABLED';
    public const DISABLE_BY_QUOTA_PromotionListV30FilteringStatusSecond = 'DISABLE_BY_QUOTA';
    public const ECOSYSTEM_RISK_FAILED_PromotionListV30FilteringStatusSecond = 'ECOSYSTEM_RISK_FAILED';
    public const LIVE_ROOM_OFF_PromotionListV30FilteringStatusSecond = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_PromotionListV30FilteringStatusSecond = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_PromotionListV30FilteringStatusSecond = 'OFFLINE_BALANCE';
    public const PRODUCT_OFFLINE_PromotionListV30FilteringStatusSecond = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLED_PromotionListV30FilteringStatusSecond = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_REACH_DAILY_DELIVERY_PromotionListV30FilteringStatusSecond = 'PROJECT_REACH_DAILY_DELIVERY';
    public const PROMOTION_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond = 'PROMOTION_OFFLINE_BUDGET';
    public const REAUDIT_PromotionListV30FilteringStatusSecond = 'REAUDIT';
    public const STAR_TASK_NOT_STARTED_PromotionListV30FilteringStatusSecond = 'STAR_TASK_NOT_STARTED';
    public const TIME_NO_REACH_PromotionListV30FilteringStatusSecond = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::AUDIT_PromotionListV30FilteringStatusSecond,
        self::AUDIT_DENY_PromotionListV30FilteringStatusSecond,
        self::AVATAR_DISABLED_PromotionListV30FilteringStatusSecond,
        self::AWEME_ACCOUNT_DISABLED_PromotionListV30FilteringStatusSecond,
        self::AWEME_ANCHOR_DISABLED_PromotionListV30FilteringStatusSecond,
        self::BALANCE_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond,
        self::BUDGET_GROUP_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond,
        self::DISABLED_PromotionListV30FilteringStatusSecond,
        self::DISABLE_BY_QUOTA_PromotionListV30FilteringStatusSecond,
        self::ECOSYSTEM_RISK_FAILED_PromotionListV30FilteringStatusSecond,
        self::LIVE_ROOM_OFF_PromotionListV30FilteringStatusSecond,
        self::NO_SCHEDULE_PromotionListV30FilteringStatusSecond,
        self::OFFLINE_BALANCE_PromotionListV30FilteringStatusSecond,
        self::PRODUCT_OFFLINE_PromotionListV30FilteringStatusSecond,
        self::PROJECT_DISABLED_PromotionListV30FilteringStatusSecond,
        self::PROJECT_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond,
        self::PROJECT_REACH_DAILY_DELIVERY_PromotionListV30FilteringStatusSecond,
        self::PROMOTION_OFFLINE_BUDGET_PromotionListV30FilteringStatusSecond,
        self::REAUDIT_PromotionListV30FilteringStatusSecond,
        self::STAR_TASK_NOT_STARTED_PromotionListV30FilteringStatusSecond,
        self::TIME_NO_REACH_PromotionListV30FilteringStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringStatusSecond', $value));
        }
        return (string) $value;
    }
}
