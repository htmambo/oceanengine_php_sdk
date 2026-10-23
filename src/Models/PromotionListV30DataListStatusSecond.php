<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListStatusSecond
{
    public const APP_NOT_ALLOWED_PromotionListV30DataListStatusSecond = 'APP_NOT_ALLOWED';
    public const AUDIT_PromotionListV30DataListStatusSecond = 'AUDIT';
    public const AUDIT_DENY_PromotionListV30DataListStatusSecond = 'AUDIT_DENY';
    public const AVATAR_DISABLED_PromotionListV30DataListStatusSecond = 'AVATAR_DISABLED';
    public const AWEME_ACCOUNT_DISABLED_PromotionListV30DataListStatusSecond = 'AWEME_ACCOUNT_DISABLED';
    public const AWEME_ACCOUNT_OPTIMIZABLE_PromotionListV30DataListStatusSecond = 'AWEME_ACCOUNT_OPTIMIZABLE';
    public const AWEME_ANCHOR_DISABLED_PromotionListV30DataListStatusSecond = 'AWEME_ANCHOR_DISABLED';
    public const AWEME_VIDEO_OPTIMIZABLE_PromotionListV30DataListStatusSecond = 'AWEME_VIDEO_OPTIMIZABLE';
    public const BALANCE_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond = 'BALANCE_OFFLINE_BUDGET';
    public const BUDGET_GROUP_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond = 'BUDGET_GROUP_OFFLINE_BUDGET';
    public const DISABLED_PromotionListV30DataListStatusSecond = 'DISABLED';
    public const DISABLE_BY_QUOTA_PromotionListV30DataListStatusSecond = 'DISABLE_BY_QUOTA';
    public const ECOSYSTEM_RISK_FAILED_PromotionListV30DataListStatusSecond = 'ECOSYSTEM_RISK_FAILED';
    public const LIVE_ROOM_OFF_PromotionListV30DataListStatusSecond = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_PromotionListV30DataListStatusSecond = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_PromotionListV30DataListStatusSecond = 'OFFLINE_BALANCE';
    public const PRODUCT_OFFLINE_PromotionListV30DataListStatusSecond = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLED_PromotionListV30DataListStatusSecond = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_REACH_DAILY_DELIVERY_PromotionListV30DataListStatusSecond = 'PROJECT_REACH_DAILY_DELIVERY';
    public const PROMOTION_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond = 'PROMOTION_OFFLINE_BUDGET';
    public const REAUDIT_PromotionListV30DataListStatusSecond = 'REAUDIT';
    public const STAR_TASK_NOT_STARTED_PromotionListV30DataListStatusSecond = 'STAR_TASK_NOT_STARTED';
    public const TIME_NO_REACH_PromotionListV30DataListStatusSecond = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::APP_NOT_ALLOWED_PromotionListV30DataListStatusSecond,
        self::AUDIT_PromotionListV30DataListStatusSecond,
        self::AUDIT_DENY_PromotionListV30DataListStatusSecond,
        self::AVATAR_DISABLED_PromotionListV30DataListStatusSecond,
        self::AWEME_ACCOUNT_DISABLED_PromotionListV30DataListStatusSecond,
        self::AWEME_ACCOUNT_OPTIMIZABLE_PromotionListV30DataListStatusSecond,
        self::AWEME_ANCHOR_DISABLED_PromotionListV30DataListStatusSecond,
        self::AWEME_VIDEO_OPTIMIZABLE_PromotionListV30DataListStatusSecond,
        self::BALANCE_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond,
        self::BUDGET_GROUP_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond,
        self::DISABLED_PromotionListV30DataListStatusSecond,
        self::DISABLE_BY_QUOTA_PromotionListV30DataListStatusSecond,
        self::ECOSYSTEM_RISK_FAILED_PromotionListV30DataListStatusSecond,
        self::LIVE_ROOM_OFF_PromotionListV30DataListStatusSecond,
        self::NO_SCHEDULE_PromotionListV30DataListStatusSecond,
        self::OFFLINE_BALANCE_PromotionListV30DataListStatusSecond,
        self::PRODUCT_OFFLINE_PromotionListV30DataListStatusSecond,
        self::PROJECT_DISABLED_PromotionListV30DataListStatusSecond,
        self::PROJECT_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond,
        self::PROJECT_REACH_DAILY_DELIVERY_PromotionListV30DataListStatusSecond,
        self::PROMOTION_OFFLINE_BUDGET_PromotionListV30DataListStatusSecond,
        self::REAUDIT_PromotionListV30DataListStatusSecond,
        self::STAR_TASK_NOT_STARTED_PromotionListV30DataListStatusSecond,
        self::TIME_NO_REACH_PromotionListV30DataListStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListStatusSecond', $value));
        }
        return (string) $value;
    }
}
