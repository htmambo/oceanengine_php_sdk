<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2FilteringPromotionStatus
{
    public const ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'ADV_OFFLINE_BUDGET';
    public const ADV_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'ADV_PRE_OFFLINE_BUDGET';
    public const AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'AUDIT';
    public const AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'AWEME_ACCOUNT_DISABLED';
    public const AWEME_ANCHOR_DISABLED_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'AWEME_ANCHOR_DISABLED';
    public const CREATE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'CREATE';
    public const DELETE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'DELIVERY_OK';
    public const ERROR_DEFAULT_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'ERROR_DEFAULT';
    public const FROZEN_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'OFFLINE_AUDIT';
    public const PRE_ONLINE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PRE_ONLINE';
    public const PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROJECT_DISABLE';
    public const PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROJECT_PRE_OFFLINE_BUDGET';
    public const PROMOTION_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROMOTION_DISABLE';
    public const PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROMOTION_OFFLINE_BALANCE';
    public const PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROMOTION_OFFLINE_BUDGET';
    public const PROMOTION_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROMOTION_PRE_OFFLINE_BUDGET';
    public const PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'PROMOTION_QUOTA_LIMIT';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'RE_AUDIT';
    public const TIME_DONE_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'TIME_DONE';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringPromotionStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::ADV_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::AWEME_ANCHOR_DISABLED_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::CREATE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::DELETE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::ERROR_DEFAULT_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::FROZEN_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PRE_ONLINE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROJECT_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROJECT_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROMOTION_DISABLE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROMOTION_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::TIME_DONE_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringPromotionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2FilteringPromotionStatus', $value));
        }
        return (string) $value;
    }
}
