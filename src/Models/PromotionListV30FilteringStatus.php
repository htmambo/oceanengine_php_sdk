<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30FilteringStatus
{
    public const ALL_PromotionListV30FilteringStatus = 'ALL';
    public const AUDIT_PromotionListV30FilteringStatus = 'AUDIT';
    public const AUDIT_DENY_PromotionListV30FilteringStatus = 'AUDIT_DENY';
    public const AWEME_ACCOUNT_DISABLED_PromotionListV30FilteringStatus = 'AWEME_ACCOUNT_DISABLED';
    public const AWEME_ANCHOR_DISABLED_PromotionListV30FilteringStatus = 'AWEME_ANCHOR_DISABLED';
    public const DELETED_PromotionListV30FilteringStatus = 'DELETED';
    public const DISABLED_PromotionListV30FilteringStatus = 'DISABLED';
    public const DISABLE_BY_QUOTA_PromotionListV30FilteringStatus = 'DISABLE_BY_QUOTA';
    public const FROZEN_PromotionListV30FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_PromotionListV30FilteringStatus = 'LIVE_ROOM_OFF';
    public const NOT_DELETED_PromotionListV30FilteringStatus = 'NOT_DELETED';
    public const NO_SCHEDULE_PromotionListV30FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_PromotionListV30FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_PromotionListV30FilteringStatus = 'OFFLINE_BUDGET';
    public const OK_PromotionListV30FilteringStatus = 'OK';
    public const PREOFFLINE_BUDGET_PromotionListV30FilteringStatus = 'PREOFFLINE_BUDGET';
    public const PRODUCT_OFFLINE_PromotionListV30FilteringStatus = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLED_PromotionListV30FilteringStatus = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_PromotionListV30FilteringStatus = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_PREOFFLINE_BUDGET_PromotionListV30FilteringStatus = 'PROJECT_PREOFFLINE_BUDGET';
    public const REAUDIT_PromotionListV30FilteringStatus = 'REAUDIT';
    public const TIME_DONE_PromotionListV30FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_PromotionListV30FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ALL_PromotionListV30FilteringStatus,
        self::AUDIT_PromotionListV30FilteringStatus,
        self::AUDIT_DENY_PromotionListV30FilteringStatus,
        self::AWEME_ACCOUNT_DISABLED_PromotionListV30FilteringStatus,
        self::AWEME_ANCHOR_DISABLED_PromotionListV30FilteringStatus,
        self::DELETED_PromotionListV30FilteringStatus,
        self::DISABLED_PromotionListV30FilteringStatus,
        self::DISABLE_BY_QUOTA_PromotionListV30FilteringStatus,
        self::FROZEN_PromotionListV30FilteringStatus,
        self::LIVE_ROOM_OFF_PromotionListV30FilteringStatus,
        self::NOT_DELETED_PromotionListV30FilteringStatus,
        self::NO_SCHEDULE_PromotionListV30FilteringStatus,
        self::OFFLINE_BALANCE_PromotionListV30FilteringStatus,
        self::OFFLINE_BUDGET_PromotionListV30FilteringStatus,
        self::OK_PromotionListV30FilteringStatus,
        self::PREOFFLINE_BUDGET_PromotionListV30FilteringStatus,
        self::PRODUCT_OFFLINE_PromotionListV30FilteringStatus,
        self::PROJECT_DISABLED_PromotionListV30FilteringStatus,
        self::PROJECT_OFFLINE_BUDGET_PromotionListV30FilteringStatus,
        self::PROJECT_PREOFFLINE_BUDGET_PromotionListV30FilteringStatus,
        self::REAUDIT_PromotionListV30FilteringStatus,
        self::TIME_DONE_PromotionListV30FilteringStatus,
        self::TIME_NO_REACH_PromotionListV30FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30FilteringStatus', $value));
        }
        return (string) $value;
    }
}
