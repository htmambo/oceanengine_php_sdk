<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataPromotionStatusNew
{
    public const ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'ADV_OFFLINE_BUDGET';
    public const AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'AUDIT';
    public const AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'AWEME_ACCOUNT_DISABLED';
    public const DELETE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'DELIVERY_OK';
    public const DISABLE_BY_R3_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'DISABLE_BY_R3';
    public const FROZEN_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'FROZEN';
    public const LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'OFFLINE_AUDIT';
    public const PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PRODUCT_OFFLINE';
    public const PROJECT_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROJECT_DISABLE';
    public const PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROJECT_OFFLINE_BUDGET';
    public const PROJECT_REACH_DAILY_DELIVERY_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROJECT_REACH_DAILY_DELIVERY';
    public const PROMOTION_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROMOTION_DISABLE';
    public const PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROMOTION_OFFLINE_BALANCE';
    public const PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROMOTION_OFFLINE_BUDGET';
    public const PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'PROMOTION_QUOTA_LIMIT';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'RE_AUDIT';
    public const SHARED_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'SHARED_WALLET_OFFLINE_BUDGET';
    public const STAR_TASK_UN_OPEN_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'STAR_TASK_UN_OPEN';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADV_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::AWEME_ACCOUNT_DISABLED_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::DELETE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::DISABLE_BY_R3_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::FROZEN_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::LIVE_ROOM_OFF_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PRODUCT_OFFLINE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROJECT_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROJECT_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROJECT_REACH_DAILY_DELIVERY_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROMOTION_DISABLE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROMOTION_OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROMOTION_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::PROMOTION_QUOTA_LIMIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::SHARED_WALLET_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::STAR_TASK_UN_OPEN_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataPromotionStatusNew,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataPromotionStatusNew', $value));
        }
        return (string) $value;
    }
}
