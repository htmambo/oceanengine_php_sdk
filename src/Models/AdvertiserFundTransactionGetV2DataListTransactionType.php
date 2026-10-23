<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserFundTransactionGetV2DataListTransactionType
{
    public const RECHARGE_AdvertiserFundTransactionGetV2DataListTransactionType = 'RECHARGE';
    public const TRANSFER_AdvertiserFundTransactionGetV2DataListTransactionType = 'TRANSFER';

    public const ALLOWED_VALUES = [
        self::RECHARGE_AdvertiserFundTransactionGetV2DataListTransactionType,
        self::TRANSFER_AdvertiserFundTransactionGetV2DataListTransactionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserFundTransactionGetV2DataListTransactionType', $value));
        }
        return (string) $value;
    }
}
