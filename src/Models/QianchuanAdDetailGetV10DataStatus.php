<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataStatus
{
    public const ADVERTISER_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus = 'ADVERTISER_OFFLINE_BUDGET';
    public const ADVERTISER_PRE_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus = 'ADVERTISER_PRE_OFFLINE_BUDGET';
    public const AUDIT_QianchuanAdDetailGetV10DataStatus = 'AUDIT';
    public const AUDIT_STATUS_ERROR_QianchuanAdDetailGetV10DataStatus = 'AUDIT_STATUS_ERROR';
    public const AWEME_ACCOUNT_DISABLED_QianchuanAdDetailGetV10DataStatus = 'AWEME_ACCOUNT_DISABLED';
    public const CAMPAIGN_DISABLE_QianchuanAdDetailGetV10DataStatus = 'CAMPAIGN_DISABLE';
    public const CAMPAIGN_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus = 'CAMPAIGN_OFFLINE_BUDGET';
    public const CAMPAIGN_PRE_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus = 'CAMPAIGN_PRE_OFFLINE_BUDGET';
    public const CREATE_QianchuanAdDetailGetV10DataStatus = 'CREATE';
    public const DELETE_QianchuanAdDetailGetV10DataStatus = 'DELETE';
    public const DELIVERY_OK_QianchuanAdDetailGetV10DataStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanAdDetailGetV10DataStatus = 'DISABLE';
    public const DRAFT_QianchuanAdDetailGetV10DataStatus = 'DRAFT';
    public const ERROR_QianchuanAdDetailGetV10DataStatus = 'ERROR';
    public const EXTERNAL_URL_DISABLE_QianchuanAdDetailGetV10DataStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanAdDetailGetV10DataStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanAdDetailGetV10DataStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanAdDetailGetV10DataStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanAdDetailGetV10DataStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanAdDetailGetV10DataStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus = 'OFFLINE_BUDGET';
    public const OFFLINE_SHARED_WALLET_BALANCE_QianchuanAdDetailGetV10DataStatus = 'OFFLINE_SHARED_WALLET_BALANCE';
    public const PRE_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus = 'PRE_OFFLINE_BUDGET';
    public const PRE_ONLINE_QianchuanAdDetailGetV10DataStatus = 'PRE_ONLINE';
    public const QUOTA_DISABLE_QianchuanAdDetailGetV10DataStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanAdDetailGetV10DataStatus = 'REAUDIT';
    public const ROI2_DISABLE_QianchuanAdDetailGetV10DataStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanAdDetailGetV10DataStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanAdDetailGetV10DataStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanAdDetailGetV10DataStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus,
        self::ADVERTISER_PRE_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus,
        self::AUDIT_QianchuanAdDetailGetV10DataStatus,
        self::AUDIT_STATUS_ERROR_QianchuanAdDetailGetV10DataStatus,
        self::AWEME_ACCOUNT_DISABLED_QianchuanAdDetailGetV10DataStatus,
        self::CAMPAIGN_DISABLE_QianchuanAdDetailGetV10DataStatus,
        self::CAMPAIGN_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus,
        self::CAMPAIGN_PRE_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus,
        self::CREATE_QianchuanAdDetailGetV10DataStatus,
        self::DELETE_QianchuanAdDetailGetV10DataStatus,
        self::DELIVERY_OK_QianchuanAdDetailGetV10DataStatus,
        self::DISABLE_QianchuanAdDetailGetV10DataStatus,
        self::DRAFT_QianchuanAdDetailGetV10DataStatus,
        self::ERROR_QianchuanAdDetailGetV10DataStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanAdDetailGetV10DataStatus,
        self::FROZEN_QianchuanAdDetailGetV10DataStatus,
        self::LIVE_ROOM_OFF_QianchuanAdDetailGetV10DataStatus,
        self::NO_SCHEDULE_QianchuanAdDetailGetV10DataStatus,
        self::OFFLINE_AUDIT_QianchuanAdDetailGetV10DataStatus,
        self::OFFLINE_BALANCE_QianchuanAdDetailGetV10DataStatus,
        self::OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus,
        self::OFFLINE_SHARED_WALLET_BALANCE_QianchuanAdDetailGetV10DataStatus,
        self::PRE_OFFLINE_BUDGET_QianchuanAdDetailGetV10DataStatus,
        self::PRE_ONLINE_QianchuanAdDetailGetV10DataStatus,
        self::QUOTA_DISABLE_QianchuanAdDetailGetV10DataStatus,
        self::REAUDIT_QianchuanAdDetailGetV10DataStatus,
        self::ROI2_DISABLE_QianchuanAdDetailGetV10DataStatus,
        self::SYSTEM_DISABLE_QianchuanAdDetailGetV10DataStatus,
        self::TIME_DONE_QianchuanAdDetailGetV10DataStatus,
        self::TIME_NO_REACH_QianchuanAdDetailGetV10DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataStatus', $value));
        }
        return (string) $value;
    }
}
