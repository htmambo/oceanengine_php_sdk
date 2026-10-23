<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType
{
    public const CREDIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType = 'CREDIT';
    public const NO_LIMIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType = 'NO_LIMIT';
    public const PREPAY_SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType = 'PREPAY';

    public const ALLOWED_VALUES = [
        self::CREDIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType,
        self::NO_LIMIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType,
        self::PREPAY_SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletBalanceGetV30WalletBalanceFiltersCapitalType', $value));
        }
        return (string) $value;
    }
}
