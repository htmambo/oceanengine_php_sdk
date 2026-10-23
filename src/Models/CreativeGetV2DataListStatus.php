<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeGetV2DataListStatus
{
    public const CREATIVE_STATUS_ADVERTISER_BUDGET_EXCEED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_ADVERTISER_BUDGET_EXCEED';
    public const CREATIVE_STATUS_ADVERTISER_PRE_OFFLINE_BUDGET_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_ADVERTISER_PRE_OFFLINE_BUDGET';
    public const CREATIVE_STATUS_AD_AUDIT_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AD_AUDIT';
    public const CREATIVE_STATUS_AD_AUDIT_DENY_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AD_AUDIT_DENY';
    public const CREATIVE_STATUS_AD_DISABLE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AD_DISABLE';
    public const CREATIVE_STATUS_AD_EXTERNAL_URL_DISABLE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AD_EXTERNAL_URL_DISABLE';
    public const CREATIVE_STATUS_AD_PRE_OFFLINE_BUDGET_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AD_PRE_OFFLINE_BUDGET';
    public const CREATIVE_STATUS_AD_REAUDIT_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AD_REAUDIT';
    public const CREATIVE_STATUS_ALL_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_ALL';
    public const CREATIVE_STATUS_AUDIT_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AUDIT';
    public const CREATIVE_STATUS_AUDIT_DENY_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AUDIT_DENY';
    public const CREATIVE_STATUS_AUTHORIZE_CANCEL_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AUTHORIZE_CANCEL';
    public const CREATIVE_STATUS_AWEME_ACCOUNT_DISABLED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AWEME_ACCOUNT_DISABLED';
    public const CREATIVE_STATUS_AWEME_ANCHOR_DISABLED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AWEME_ANCHOR_DISABLED';
    public const CREATIVE_STATUS_AWEME_ITEM_DISABLED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_AWEME_ITEM_DISABLED';
    public const CREATIVE_STATUS_BALANCE_EXCEED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_BALANCE_EXCEED';
    public const CREATIVE_STATUS_BUDGET_EXCEED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_BUDGET_EXCEED';
    public const CREATIVE_STATUS_CAMPAIGN_DISABLE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_CAMPAIGN_DISABLE';
    public const CREATIVE_STATUS_CAMPAIGN_EXCEED_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_CAMPAIGN_EXCEED';
    public const CREATIVE_STATUS_CAN_NOT_EDIT_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_CAN_NOT_EDIT';
    public const CREATIVE_STATUS_CAN_NOT_LAUNCH_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_CAN_NOT_LAUNCH';
    public const CREATIVE_STATUS_CREATE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_CREATE';
    public const CREATIVE_STATUS_DATA_ERROR_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_DATA_ERROR';
    public const CREATIVE_STATUS_DELETE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_DELETE';
    public const CREATIVE_STATUS_DELIVERY_OK_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_DELIVERY_OK';
    public const CREATIVE_STATUS_DISABLE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_DISABLE';
    public const CREATIVE_STATUS_DONE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_DONE';
    public const CREATIVE_STATUS_FROZEN_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_FROZEN';
    public const CREATIVE_STATUS_LIVE_ROOM_OFF_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_LIVE_ROOM_OFF';
    public const CREATIVE_STATUS_NOT_START_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_NOT_START';
    public const CREATIVE_STATUS_NO_DELIVERY_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_NO_DELIVERY';
    public const CREATIVE_STATUS_NO_SCHEDULE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_NO_SCHEDULE';
    public const CREATIVE_STATUS_PRODUCT_OFFLINE_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_PRODUCT_OFFLINE';
    public const CREATIVE_STATUS_REAUDIT_CreativeGetV2DataListStatus = 'CREATIVE_STATUS_REAUDIT';

    public const ALLOWED_VALUES = [
        self::CREATIVE_STATUS_ADVERTISER_BUDGET_EXCEED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_ADVERTISER_PRE_OFFLINE_BUDGET_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AD_AUDIT_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AD_AUDIT_DENY_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AD_DISABLE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AD_EXTERNAL_URL_DISABLE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AD_PRE_OFFLINE_BUDGET_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AD_REAUDIT_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_ALL_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AUDIT_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AUDIT_DENY_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AUTHORIZE_CANCEL_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AWEME_ACCOUNT_DISABLED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AWEME_ANCHOR_DISABLED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_AWEME_ITEM_DISABLED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_BALANCE_EXCEED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_BUDGET_EXCEED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_CAMPAIGN_DISABLE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_CAMPAIGN_EXCEED_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_CAN_NOT_EDIT_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_CAN_NOT_LAUNCH_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_CREATE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_DATA_ERROR_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_DELETE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_DELIVERY_OK_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_DISABLE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_DONE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_FROZEN_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_LIVE_ROOM_OFF_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_NOT_START_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_NO_DELIVERY_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_NO_SCHEDULE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_PRODUCT_OFFLINE_CreativeGetV2DataListStatus,
        self::CREATIVE_STATUS_REAUDIT_CreativeGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
