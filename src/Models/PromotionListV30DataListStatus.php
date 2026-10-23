<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListStatus
{
    public const ADVERTISER_OFFLINE_BUDGET_PromotionListV30DataListStatus = 'ADVERTISER_OFFLINE_BUDGET';
    public const ADVERTISER_PREOFFLINE_BUDGET_PromotionListV30DataListStatus = 'ADVERTISER_PREOFFLINE_BUDGET';
    public const ALL_PromotionListV30DataListStatus = 'ALL';
    public const AUDIT_PromotionListV30DataListStatus = 'AUDIT';
    public const AUDIT_DENY_PromotionListV30DataListStatus = 'AUDIT_DENY';
    public const AWEME_ACCOUNT_DISABLED_PromotionListV30DataListStatus = 'AWEME_ACCOUNT_DISABLED';
    public const AWEME_ANCHOR_DISABLED_PromotionListV30DataListStatus = 'AWEME_ANCHOR_DISABLED';
    public const CREATE_PromotionListV30DataListStatus = 'CREATE';
    public const DELETED_PromotionListV30DataListStatus = 'DELETED';
    public const DISABLED_PromotionListV30DataListStatus = 'DISABLED';
    public const DISABLE_BY_QUOTA_PromotionListV30DataListStatus = 'DISABLE_BY_QUOTA';
    public const ERROR_DEFAULT_PromotionListV30DataListStatus = 'ERROR_DEFAULT';
    public const FROZEN_PromotionListV30DataListStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_PromotionListV30DataListStatus = 'LIVE_ROOM_OFF';
    public const NOT_DELETED_PromotionListV30DataListStatus = 'NOT_DELETED';
    public const NO_SCHEDULE_PromotionListV30DataListStatus = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_PromotionListV30DataListStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_PromotionListV30DataListStatus = 'OFFLINE_BUDGET';
    public const OK_PromotionListV30DataListStatus = 'OK';
    public const PREOFFLINE_BUDGET_PromotionListV30DataListStatus = 'PREOFFLINE_BUDGET';
    public const PRODUCT_OFFLINE_PromotionListV30DataListStatus = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLED_PromotionListV30DataListStatus = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_PromotionListV30DataListStatus = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_PREOFFLINE_BUDGET_PromotionListV30DataListStatus = 'PROJECT_PREOFFLINE_BUDGET';
    public const REAUDIT_PromotionListV30DataListStatus = 'REAUDIT';
    public const TIME_DONE_PromotionListV30DataListStatus = 'TIME_DONE';
    public const TIME_NO_REACH_PromotionListV30DataListStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_PromotionListV30DataListStatus,
        self::ADVERTISER_PREOFFLINE_BUDGET_PromotionListV30DataListStatus,
        self::ALL_PromotionListV30DataListStatus,
        self::AUDIT_PromotionListV30DataListStatus,
        self::AUDIT_DENY_PromotionListV30DataListStatus,
        self::AWEME_ACCOUNT_DISABLED_PromotionListV30DataListStatus,
        self::AWEME_ANCHOR_DISABLED_PromotionListV30DataListStatus,
        self::CREATE_PromotionListV30DataListStatus,
        self::DELETED_PromotionListV30DataListStatus,
        self::DISABLED_PromotionListV30DataListStatus,
        self::DISABLE_BY_QUOTA_PromotionListV30DataListStatus,
        self::ERROR_DEFAULT_PromotionListV30DataListStatus,
        self::FROZEN_PromotionListV30DataListStatus,
        self::LIVE_ROOM_OFF_PromotionListV30DataListStatus,
        self::NOT_DELETED_PromotionListV30DataListStatus,
        self::NO_SCHEDULE_PromotionListV30DataListStatus,
        self::OFFLINE_BALANCE_PromotionListV30DataListStatus,
        self::OFFLINE_BUDGET_PromotionListV30DataListStatus,
        self::OK_PromotionListV30DataListStatus,
        self::PREOFFLINE_BUDGET_PromotionListV30DataListStatus,
        self::PRODUCT_OFFLINE_PromotionListV30DataListStatus,
        self::PROJECT_DISABLED_PromotionListV30DataListStatus,
        self::PROJECT_OFFLINE_BUDGET_PromotionListV30DataListStatus,
        self::PROJECT_PREOFFLINE_BUDGET_PromotionListV30DataListStatus,
        self::REAUDIT_PromotionListV30DataListStatus,
        self::TIME_DONE_PromotionListV30DataListStatus,
        self::TIME_NO_REACH_PromotionListV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
