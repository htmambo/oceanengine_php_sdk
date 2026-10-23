<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataStatus
{
    public const AD_STATUS_CAMPAIGN_DISABLE_AdGetV2DataStatus = 'AD_STATUS_CAMPAIGN_DISABLE';
    public const AD_STATUS_ADVERTISER_PRE_OFFLINE_BUDGET_AdGetV2DataStatus = 'AD_STATUS_ADVERTISER_PRE_OFFLINE_BUDGET';
    public const AD_STATUS_DELIVERY_OK_AdGetV2DataStatus = 'AD_STATUS_DELIVERY_OK';
    public const AD_STATUS_ADVERTISER_BUDGET_EXCEED_AdGetV2DataStatus = 'AD_STATUS_ADVERTISER_BUDGET_EXCEED';
    public const AD_STATUS_CAMPAIGN_PRE_OFFLINE_BUDGET_AdGetV2DataStatus = 'AD_STATUS_CAMPAIGN_PRE_OFFLINE_BUDGET';
    public const AD_STATUS_PRE_OFFLINE_BUDGET_AdGetV2DataStatus = 'AD_STATUS_PRE_OFFLINE_BUDGET';
    public const AD_STATUS_AUDIT_AdGetV2DataStatus = 'AD_STATUS_AUDIT';
    public const AD_STATUS_DONE_AdGetV2DataStatus = 'AD_STATUS_DONE';
    public const AD_STATUS_AUDIT_STATUS_ERROR_AdGetV2DataStatus = 'AD_STATUS_AUDIT_STATUS_ERROR';
    public const AD_STATUS_PRE_ONLINE_AdGetV2DataStatus = 'AD_STATUS_PRE_ONLINE';
    public const AD_STATUS_AUDIT_DENY_AdGetV2DataStatus = 'AD_STATUS_AUDIT_DENY';
    public const AD_STATUS_AWEME_ACCOUNT_PUNISHED_AdGetV2DataStatus = 'AD_STATUS_AWEME_ACCOUNT_PUNISHED';
    public const AD_STATUS_BUDGET_EXCEED_AdGetV2DataStatus = 'AD_STATUS_BUDGET_EXCEED';
    public const AD_STATUS_AWEME_ACCOUNT_DISABLED_AdGetV2DataStatus = 'AD_STATUS_AWEME_ACCOUNT_DISABLED';
    public const AD_STATUS_LIVE_ROOM_OFF_AdGetV2DataStatus = 'AD_STATUS_LIVE_ROOM_OFF';
    public const AD_STATUS_CREATE_AdGetV2DataStatus = 'AD_STATUS_CREATE';
    public const AD_STATUS_BALANCE_EXCEED_AdGetV2DataStatus = 'AD_STATUS_BALANCE_EXCEED';
    public const AD_STATUS_DATA_ERROR_AdGetV2DataStatus = 'AD_STATUS_DATA_ERROR';
    public const AD_STATUS_DRAFT_AdGetV2DataStatus = 'AD_STATUS_DRAFT';
    public const AD_STATUS_CAMPAIGN_EXCEED_AdGetV2DataStatus = 'AD_STATUS_CAMPAIGN_EXCEED';
    public const AD_STATUS_LIVE_CANNOT_LAUNCH_AdGetV2DataStatus = 'AD_STATUS_LIVE_CANNOT_LAUNCH';
    public const AD_STATUS_REAUDIT_AdGetV2DataStatus = 'AD_STATUS_REAUDIT';
    public const AD_STATUS_EXTERNAL_URL_DISABLE_AdGetV2DataStatus = 'AD_STATUS_EXTERNAL_URL_DISABLE';
    public const AD_STATUS_NOT_START_AdGetV2DataStatus = 'AD_STATUS_NOT_START';
    public const AD_STATUS_DSP_AD_DISABLE_AdGetV2DataStatus = 'AD_STATUS_DSP_AD_DISABLE';
    public const AD_STATUS_CANNOT_EDIT_AdGetV2DataStatus = 'AD_STATUS_CANNOT_EDIT';
    public const AD_STATUS_DISABLE_BY_QUOTA_AdGetV2DataStatus = 'AD_STATUS_DISABLE_BY_QUOTA';
    public const AD_STATUS_NO_SCHEDULE_AdGetV2DataStatus = 'AD_STATUS_NO_SCHEDULE';
    public const AD_STATUS_DISABLE_AdGetV2DataStatus = 'AD_STATUS_DISABLE';
    public const AD_STATUS_SOME_DELIVERY_OK_AdGetV2DataStatus = 'AD_STATUS_SOME_DELIVERY_OK';
    public const AD_STATUS_FROZEN_AdGetV2DataStatus = 'AD_STATUS_FROZEN';
    public const AD_STATUS_DELETE_AdGetV2DataStatus = 'AD_STATUS_DELETE';
    public const AD_STATUS_PRODUCT_OFFLINE_AdGetV2DataStatus = 'AD_STATUS_PRODUCT_OFFLINE';

    public const ALLOWED_VALUES = [
        self::AD_STATUS_CAMPAIGN_DISABLE_AdGetV2DataStatus,
        self::AD_STATUS_ADVERTISER_PRE_OFFLINE_BUDGET_AdGetV2DataStatus,
        self::AD_STATUS_DELIVERY_OK_AdGetV2DataStatus,
        self::AD_STATUS_ADVERTISER_BUDGET_EXCEED_AdGetV2DataStatus,
        self::AD_STATUS_CAMPAIGN_PRE_OFFLINE_BUDGET_AdGetV2DataStatus,
        self::AD_STATUS_PRE_OFFLINE_BUDGET_AdGetV2DataStatus,
        self::AD_STATUS_AUDIT_AdGetV2DataStatus,
        self::AD_STATUS_DONE_AdGetV2DataStatus,
        self::AD_STATUS_AUDIT_STATUS_ERROR_AdGetV2DataStatus,
        self::AD_STATUS_PRE_ONLINE_AdGetV2DataStatus,
        self::AD_STATUS_AUDIT_DENY_AdGetV2DataStatus,
        self::AD_STATUS_AWEME_ACCOUNT_PUNISHED_AdGetV2DataStatus,
        self::AD_STATUS_BUDGET_EXCEED_AdGetV2DataStatus,
        self::AD_STATUS_AWEME_ACCOUNT_DISABLED_AdGetV2DataStatus,
        self::AD_STATUS_LIVE_ROOM_OFF_AdGetV2DataStatus,
        self::AD_STATUS_CREATE_AdGetV2DataStatus,
        self::AD_STATUS_BALANCE_EXCEED_AdGetV2DataStatus,
        self::AD_STATUS_DATA_ERROR_AdGetV2DataStatus,
        self::AD_STATUS_DRAFT_AdGetV2DataStatus,
        self::AD_STATUS_CAMPAIGN_EXCEED_AdGetV2DataStatus,
        self::AD_STATUS_LIVE_CANNOT_LAUNCH_AdGetV2DataStatus,
        self::AD_STATUS_REAUDIT_AdGetV2DataStatus,
        self::AD_STATUS_EXTERNAL_URL_DISABLE_AdGetV2DataStatus,
        self::AD_STATUS_NOT_START_AdGetV2DataStatus,
        self::AD_STATUS_DSP_AD_DISABLE_AdGetV2DataStatus,
        self::AD_STATUS_CANNOT_EDIT_AdGetV2DataStatus,
        self::AD_STATUS_DISABLE_BY_QUOTA_AdGetV2DataStatus,
        self::AD_STATUS_NO_SCHEDULE_AdGetV2DataStatus,
        self::AD_STATUS_DISABLE_AdGetV2DataStatus,
        self::AD_STATUS_SOME_DELIVERY_OK_AdGetV2DataStatus,
        self::AD_STATUS_FROZEN_AdGetV2DataStatus,
        self::AD_STATUS_DELETE_AdGetV2DataStatus,
        self::AD_STATUS_PRODUCT_OFFLINE_AdGetV2DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataStatus', $value));
        }
        return (string) $value;
    }
}
