<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentTransferTransactionRecordV2DataRecordsDeliveryType
{
    public const DEFAULT_AgentTransferTransactionRecordV2DataRecordsDeliveryType = 'DEFAULT';
    public const BIDDING_AgentTransferTransactionRecordV2DataRecordsDeliveryType = 'BIDDING';
    public const BRAND_AgentTransferTransactionRecordV2DataRecordsDeliveryType = 'BRAND';

    public const ALLOWED_VALUES = [
        self::DEFAULT_AgentTransferTransactionRecordV2DataRecordsDeliveryType,
        self::BIDDING_AgentTransferTransactionRecordV2DataRecordsDeliveryType,
        self::BRAND_AgentTransferTransactionRecordV2DataRecordsDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentTransferTransactionRecordV2DataRecordsDeliveryType', $value));
        }
        return (string) $value;
    }
}
