<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvRechargeRechargeRecordV2FilteringAccountType
{
    public const FIRST_AGENT_ACCOUNT_AgentAdvRechargeRechargeRecordV2FilteringAccountType = 'FIRST_AGENT_ACCOUNT';
    public const ADVERTISER_ACCOUNT_AgentAdvRechargeRechargeRecordV2FilteringAccountType = 'ADVERTISER_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::FIRST_AGENT_ACCOUNT_AgentAdvRechargeRechargeRecordV2FilteringAccountType,
        self::ADVERTISER_ACCOUNT_AgentAdvRechargeRechargeRecordV2FilteringAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvRechargeRechargeRecordV2FilteringAccountType', $value));
        }
        return (string) $value;
    }
}
