<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentTransferTransactionRecordV2DataRecordsTransferType
{
    public const ADD_MONEY_AgentTransferTransactionRecordV2DataRecordsTransferType = 'ADD_MONEY';
    public const MUTUAL_TRANSFER_AgentTransferTransactionRecordV2DataRecordsTransferType = 'MUTUAL_TRANSFER';
    public const REFUND_MONEY_AgentTransferTransactionRecordV2DataRecordsTransferType = 'REFUND_MONEY';

    public const ALLOWED_VALUES = [
        self::ADD_MONEY_AgentTransferTransactionRecordV2DataRecordsTransferType,
        self::MUTUAL_TRANSFER_AgentTransferTransactionRecordV2DataRecordsTransferType,
        self::REFUND_MONEY_AgentTransferTransactionRecordV2DataRecordsTransferType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentTransferTransactionRecordV2DataRecordsTransferType', $value));
        }
        return (string) $value;
    }
}
