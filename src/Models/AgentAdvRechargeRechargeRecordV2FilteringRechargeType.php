<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvRechargeRechargeRecordV2FilteringRechargeType
{
    public const PREPAY_AgentAdvRechargeRechargeRecordV2FilteringRechargeType = 'PREPAY';
    public const CREDIT_AgentAdvRechargeRechargeRecordV2FilteringRechargeType = 'CREDIT';
    public const GRANT_AgentAdvRechargeRechargeRecordV2FilteringRechargeType = 'GRANT';
    public const REBATE_AgentAdvRechargeRechargeRecordV2FilteringRechargeType = 'REBATE';
    public const PRE_LOAN_AgentAdvRechargeRechargeRecordV2FilteringRechargeType = 'PRE_LOAN';

    public const ALLOWED_VALUES = [
        self::PREPAY_AgentAdvRechargeRechargeRecordV2FilteringRechargeType,
        self::CREDIT_AgentAdvRechargeRechargeRecordV2FilteringRechargeType,
        self::GRANT_AgentAdvRechargeRechargeRecordV2FilteringRechargeType,
        self::REBATE_AgentAdvRechargeRechargeRecordV2FilteringRechargeType,
        self::PRE_LOAN_AgentAdvRechargeRechargeRecordV2FilteringRechargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvRechargeRechargeRecordV2FilteringRechargeType', $value));
        }
        return (string) $value;
    }
}
