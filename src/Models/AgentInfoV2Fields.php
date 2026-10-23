<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentInfoV2Fields
{
    public const CREATE_TIME_AgentInfoV2Fields = 'create_time';
    public const ACCOUNT_STATUS_AgentInfoV2Fields = 'account_status';
    public const COMPANY_ID_AgentInfoV2Fields = 'company_id';
    public const CUSTOMER_ID_AgentInfoV2Fields = 'customer_id';
    public const AGENT_NAME_AgentInfoV2Fields = 'agent_name';
    public const CUSTOMER_NAME_AgentInfoV2Fields = 'customer_name';
    public const COMPANY_NAME_AgentInfoV2Fields = 'company_name';
    public const ROLE_AgentInfoV2Fields = 'role';
    public const AGENT_ID_AgentInfoV2Fields = 'agent_id';

    public const ALLOWED_VALUES = [
        self::CREATE_TIME_AgentInfoV2Fields,
        self::ACCOUNT_STATUS_AgentInfoV2Fields,
        self::COMPANY_ID_AgentInfoV2Fields,
        self::CUSTOMER_ID_AgentInfoV2Fields,
        self::AGENT_NAME_AgentInfoV2Fields,
        self::CUSTOMER_NAME_AgentInfoV2Fields,
        self::COMPANY_NAME_AgentInfoV2Fields,
        self::ROLE_AgentInfoV2Fields,
        self::AGENT_ID_AgentInfoV2Fields,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentInfoV2Fields', $value));
        }
        return (string) $value;
    }
}
