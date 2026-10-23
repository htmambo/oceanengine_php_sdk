<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2FilteringLocalAdStatusList
{
    public const ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'ADVERTISER_OFFLINE_BUDGET';
    public const AD_DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'AD_DISABLE';
    public const AUDIT_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'AUDIT';
    public const AWEME_ACCOUNT_DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'AWEME_ACCOUNT_DISABLE';
    public const CAMPAIGN_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'CAMPAIGN_OFFLINE_BUDGET';
    public const CAMPAIGN_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'CAMPAIGN_PRE_OFFLINE_BUDGET';
    public const DELETE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'DELIVERY_OK';
    public const DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'FROZEN';
    public const LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'OFFLINE_BUDGET';
    public const PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'PRE_OFFLINE_BUDGET';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'RE_AUDIT';
    public const SHARE_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'SHARE_WALLET_OFFLINE_BUDGET';
    public const TIME_DONE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'TIME_DONE';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::AD_DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::AUDIT_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::AWEME_ACCOUNT_DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::CAMPAIGN_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::CAMPAIGN_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::DELETE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::EXTERNAL_URL_DISABLE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::FROZEN_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::SHARE_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::TIME_DONE_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringLocalAdStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2FilteringLocalAdStatusList', $value));
        }
        return (string) $value;
    }
}
