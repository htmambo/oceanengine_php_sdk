<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataPromotionStatus
{
    public const ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'ADV_OFFLINE_BUDGET';
    public const ADV_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'ADV_PRE_OFFLINE_BUDGET';
    public const AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'AUDIT';
    public const AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'AWEME_ACCOUNT_DISABLED';
    public const AWEME_ANCHOR_DISABLED_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'AWEME_ANCHOR_DISABLED';
    public const CREATE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'CREATE';
    public const DELETE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'DELIVERY_OK';
    public const ERROR_DEFAULT_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'ERROR_DEFAULT';
    public const FROZEN_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'OFFLINE_AUDIT';
    public const PRE_ONLINE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PRE_ONLINE';
    public const PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROJECT_DISABLE';
    public const PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROJECT_PRE_OFFLINE_BUDGET';
    public const PROMOTION_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROMOTION_DISABLE';
    public const PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROMOTION_OFFLINE_BALANCE';
    public const PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROMOTION_OFFLINE_BUDGET';
    public const PROMOTION_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROMOTION_PRE_OFFLINE_BUDGET';
    public const PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'PROMOTION_QUOTA_LIMIT';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'RE_AUDIT';
    public const TIME_DONE_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'TIME_DONE';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataPromotionStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::ADV_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::AWEME_ANCHOR_DISABLED_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::CREATE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::DELETE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::ERROR_DEFAULT_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::FROZEN_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PRE_ONLINE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROJECT_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROJECT_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROMOTION_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROMOTION_PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::TIME_DONE_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataPromotionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataPromotionStatus', $value));
        }
        return (string) $value;
    }
}
