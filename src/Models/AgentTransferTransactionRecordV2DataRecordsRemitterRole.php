<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentTransferTransactionRecordV2DataRecordsRemitterRole
{
    public const ROLE_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_ADVERTISER';
    public const ROLE_ADVERTISER_SYSTEM_ACCOUNT_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_ADVERTISER_SYSTEM_ACCOUNT';
    public const ROLE_AGENT_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_AGENT';
    public const ROLE_AGENT_SYSTEM_ACCOUNT_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_AGENT_SYSTEM_ACCOUNT';
    public const ROLE_CHILD_AGENT_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_CHILD_AGENT';
    public const ROLE_ECP_VIRTUAL_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_ECP_VIRTUAL_ADVERTISER';
    public const ROLE_LOCAL_LIFE_VIRTUAL_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_LOCAL_LIFE_VIRTUAL_ADVERTISER';
    public const ROLE_SHARE_WALLET_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_SHARE_WALLET';
    public const ROLE_VIRTAUL_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole = 'ROLE_VIRTAUL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::ROLE_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_ADVERTISER_SYSTEM_ACCOUNT_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_AGENT_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_AGENT_SYSTEM_ACCOUNT_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_CHILD_AGENT_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_ECP_VIRTUAL_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_LOCAL_LIFE_VIRTUAL_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_SHARE_WALLET_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
        self::ROLE_VIRTAUL_ADVERTISER_AgentTransferTransactionRecordV2DataRecordsRemitterRole,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentTransferTransactionRecordV2DataRecordsRemitterRole', $value));
        }
        return (string) $value;
    }
}
