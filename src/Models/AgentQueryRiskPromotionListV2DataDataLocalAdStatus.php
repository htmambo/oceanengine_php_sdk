<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataLocalAdStatus
{
    public const ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'ADVERTISER_OFFLINE_BUDGET';
    public const AD_DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'AD_DISABLE';
    public const AUDIT_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'AUDIT';
    public const AWEME_ACCOUNT_DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'AWEME_ACCOUNT_DISABLE';
    public const CAMPAIGN_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'CAMPAIGN_OFFLINE_BUDGET';
    public const CAMPAIGN_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'CAMPAIGN_PRE_OFFLINE_BUDGET';
    public const DELETE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'DELIVERY_OK';
    public const DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'OFFLINE_BUDGET';
    public const PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'PRE_OFFLINE_BUDGET';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'RE_AUDIT';
    public const SHARE_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'SHARE_WALLET_OFFLINE_BUDGET';
    public const TIME_DONE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'TIME_DONE';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataLocalAdStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::AD_DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::AUDIT_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::AWEME_ACCOUNT_DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::CAMPAIGN_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::CAMPAIGN_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::DELETE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::EXTERNAL_URL_DISABLE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::FROZEN_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::SHARE_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::TIME_DONE_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataLocalAdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataLocalAdStatus', $value));
        }
        return (string) $value;
    }
}
