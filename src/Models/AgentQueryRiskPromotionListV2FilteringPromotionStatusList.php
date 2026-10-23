<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2FilteringPromotionStatusList
{
    public const ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'ADV_OFFLINE_BUDGET';
    public const AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'AUDIT';
    public const AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'AWEME_ACCOUNT_DISABLED';
    public const DELETE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'DELIVERY_OK';
    public const DISABLE_BY_R3_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'DISABLE_BY_R3';
    public const FROZEN_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'FROZEN';
    public const LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'OFFLINE_AUDIT';
    public const PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROJECT_DISABLE';
    public const PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_REACH_DAILY_DELIVERY_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROJECT_REACH_DAILY_DELIVERY';
    public const PROMOTION_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROMOTION_DISABLE';
    public const PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROMOTION_OFFLINE_BALANCE';
    public const PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROMOTION_OFFLINE_BUDGET';
    public const PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'PROMOTION_QUOTA_LIMIT';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'RE_AUDIT';
    public const SHARED_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'SHARED_WALLET_OFFLINE_BUDGET';
    public const STAR_TASK_UN_OPEN_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'STAR_TASK_UN_OPEN';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringPromotionStatusList = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::DELETE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::DISABLE_BY_R3_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::FROZEN_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROJECT_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROJECT_REACH_DAILY_DELIVERY_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROMOTION_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::SHARED_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::STAR_TASK_UN_OPEN_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringPromotionStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2FilteringPromotionStatusList', $value));
        }
        return (string) $value;
    }
}
