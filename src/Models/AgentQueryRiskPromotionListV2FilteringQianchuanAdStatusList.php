<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList
{
    public const ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'ADVERTISER_OFFLINE_BUDGET';
    public const AUDIT_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'AUDIT';
    public const DELETE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'DELIVERY_OK';
    public const DISABLE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'DISABLE';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'OFFLINE_BUDGET';
    public const PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'PRE_OFFLINE_BUDGET';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'RE_AUDIT';
    public const SYSTEM_DISABLE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'SYSTEM_DISABLE';
    public const TIME_DONE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'TIME_DONE';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'TIME_NO_REACH';
    public const UNI_PROM_DISABLE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList = 'UNI_PROM_DISABLE';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::AUDIT_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::DELETE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::DISABLE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::OFFLINE_BALANCE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::SYSTEM_DISABLE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::TIME_DONE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
        self::UNI_PROM_DISABLE_AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2FilteringQianchuanAdStatusList', $value));
        }
        return (string) $value;
    }
}
