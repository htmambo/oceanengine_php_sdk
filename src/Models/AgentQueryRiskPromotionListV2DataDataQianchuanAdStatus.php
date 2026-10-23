<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus
{
    public const ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'ADVERTISER_OFFLINE_BUDGET';
    public const AUDIT_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'AUDIT';
    public const DELETE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'DELETE';
    public const DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'DELIVERY_OK';
    public const DISABLE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'DISABLE';
    public const NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'OFFLINE_BUDGET';
    public const PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'PRE_OFFLINE_BUDGET';
    public const RE_AUDIT_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'RE_AUDIT';
    public const SYSTEM_DISABLE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'TIME_DONE';
    public const TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'TIME_NO_REACH';
    public const UNI_PROM_DISABLE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus = 'UNI_PROM_DISABLE';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::AUDIT_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::DELETE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::DELIVERY_OK_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::DISABLE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::NO_SCHEDULE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::OFFLINE_AUDIT_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::OFFLINE_BALANCE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::PRE_OFFLINE_BUDGET_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::RE_AUDIT_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::SYSTEM_DISABLE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::TIME_DONE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::TIME_NO_REACH_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
        self::UNI_PROM_DISABLE_AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentQueryRiskPromotionListV2DataDataQianchuanAdStatus', $value));
        }
        return (string) $value;
    }
}
