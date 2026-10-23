<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListStatus
{
    public const ADVERTISER_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus = 'ADVERTISER_OFFLINE_BUDGET';
    public const ADVERTISER_PRE_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus = 'ADVERTISER_PRE_OFFLINE_BUDGET';
    public const AUDIT_QianchuanAdGetV10DataListStatus = 'AUDIT';
    public const AUDIT_STATUS_ERROR_QianchuanAdGetV10DataListStatus = 'AUDIT_STATUS_ERROR';
    public const AWEME_ACCOUNT_DISABLED_QianchuanAdGetV10DataListStatus = 'AWEME_ACCOUNT_DISABLED';
    public const CAMPAIGN_DISABLE_QianchuanAdGetV10DataListStatus = 'CAMPAIGN_DISABLE';
    public const CAMPAIGN_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus = 'CAMPAIGN_OFFLINE_BUDGET';
    public const CAMPAIGN_PRE_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus = 'CAMPAIGN_PRE_OFFLINE_BUDGET';
    public const CREATE_QianchuanAdGetV10DataListStatus = 'CREATE';
    public const DELETE_QianchuanAdGetV10DataListStatus = 'DELETE';
    public const DELIVERY_OK_QianchuanAdGetV10DataListStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanAdGetV10DataListStatus = 'DISABLE';
    public const DRAFT_QianchuanAdGetV10DataListStatus = 'DRAFT';
    public const ERROR_QianchuanAdGetV10DataListStatus = 'ERROR';
    public const EXTERNAL_URL_DISABLE_QianchuanAdGetV10DataListStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanAdGetV10DataListStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanAdGetV10DataListStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanAdGetV10DataListStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanAdGetV10DataListStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanAdGetV10DataListStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus = 'OFFLINE_BUDGET';
    public const OFFLINE_SHARED_WALLET_BALANCE_QianchuanAdGetV10DataListStatus = 'OFFLINE_SHARED_WALLET_BALANCE';
    public const PRE_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus = 'PRE_OFFLINE_BUDGET';
    public const PRE_ONLINE_QianchuanAdGetV10DataListStatus = 'PRE_ONLINE';
    public const QUOTA_DISABLE_QianchuanAdGetV10DataListStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanAdGetV10DataListStatus = 'REAUDIT';
    public const ROI2_DISABLE_QianchuanAdGetV10DataListStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanAdGetV10DataListStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanAdGetV10DataListStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanAdGetV10DataListStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus,
        self::ADVERTISER_PRE_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus,
        self::AUDIT_QianchuanAdGetV10DataListStatus,
        self::AUDIT_STATUS_ERROR_QianchuanAdGetV10DataListStatus,
        self::AWEME_ACCOUNT_DISABLED_QianchuanAdGetV10DataListStatus,
        self::CAMPAIGN_DISABLE_QianchuanAdGetV10DataListStatus,
        self::CAMPAIGN_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus,
        self::CAMPAIGN_PRE_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus,
        self::CREATE_QianchuanAdGetV10DataListStatus,
        self::DELETE_QianchuanAdGetV10DataListStatus,
        self::DELIVERY_OK_QianchuanAdGetV10DataListStatus,
        self::DISABLE_QianchuanAdGetV10DataListStatus,
        self::DRAFT_QianchuanAdGetV10DataListStatus,
        self::ERROR_QianchuanAdGetV10DataListStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanAdGetV10DataListStatus,
        self::FROZEN_QianchuanAdGetV10DataListStatus,
        self::LIVE_ROOM_OFF_QianchuanAdGetV10DataListStatus,
        self::NO_SCHEDULE_QianchuanAdGetV10DataListStatus,
        self::OFFLINE_AUDIT_QianchuanAdGetV10DataListStatus,
        self::OFFLINE_BALANCE_QianchuanAdGetV10DataListStatus,
        self::OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus,
        self::OFFLINE_SHARED_WALLET_BALANCE_QianchuanAdGetV10DataListStatus,
        self::PRE_OFFLINE_BUDGET_QianchuanAdGetV10DataListStatus,
        self::PRE_ONLINE_QianchuanAdGetV10DataListStatus,
        self::QUOTA_DISABLE_QianchuanAdGetV10DataListStatus,
        self::REAUDIT_QianchuanAdGetV10DataListStatus,
        self::ROI2_DISABLE_QianchuanAdGetV10DataListStatus,
        self::SYSTEM_DISABLE_QianchuanAdGetV10DataListStatus,
        self::TIME_DONE_QianchuanAdGetV10DataListStatus,
        self::TIME_NO_REACH_QianchuanAdGetV10DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListStatus', $value));
        }
        return (string) $value;
    }
}
