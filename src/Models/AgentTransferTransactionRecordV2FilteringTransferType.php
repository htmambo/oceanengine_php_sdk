<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentTransferTransactionRecordV2FilteringTransferType
{
    public const ADD_MONEY_AgentTransferTransactionRecordV2FilteringTransferType = 'ADD_MONEY';
    public const MUTUAL_TRANSFER_AgentTransferTransactionRecordV2FilteringTransferType = 'MUTUAL_TRANSFER';
    public const REFUND_MONEY_AgentTransferTransactionRecordV2FilteringTransferType = 'REFUND_MONEY';

    public const ALLOWED_VALUES = [
        self::ADD_MONEY_AgentTransferTransactionRecordV2FilteringTransferType,
        self::MUTUAL_TRANSFER_AgentTransferTransactionRecordV2FilteringTransferType,
        self::REFUND_MONEY_AgentTransferTransactionRecordV2FilteringTransferType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentTransferTransactionRecordV2FilteringTransferType', $value));
        }
        return (string) $value;
    }
}
