<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserFundTransactionGetV2TransactionType
{
    public const RECHARGE_AdvertiserFundTransactionGetV2TransactionType = 'RECHARGE';
    public const TRANSFER_AdvertiserFundTransactionGetV2TransactionType = 'TRANSFER';

    public const ALLOWED_VALUES = [
        self::RECHARGE_AdvertiserFundTransactionGetV2TransactionType,
        self::TRANSFER_AdvertiserFundTransactionGetV2TransactionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserFundTransactionGetV2TransactionType', $value));
        }
        return (string) $value;
    }
}
