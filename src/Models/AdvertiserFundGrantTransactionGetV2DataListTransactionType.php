<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserFundGrantTransactionGetV2DataListTransactionType
{
    public const RECHARGE_AdvertiserFundGrantTransactionGetV2DataListTransactionType = 'RECHARGE';
    public const TRANSFER_AdvertiserFundGrantTransactionGetV2DataListTransactionType = 'TRANSFER';

    public const ALLOWED_VALUES = [
        self::RECHARGE_AdvertiserFundGrantTransactionGetV2DataListTransactionType,
        self::TRANSFER_AdvertiserFundGrantTransactionGetV2DataListTransactionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserFundGrantTransactionGetV2DataListTransactionType', $value));
        }
        return (string) $value;
    }
}
