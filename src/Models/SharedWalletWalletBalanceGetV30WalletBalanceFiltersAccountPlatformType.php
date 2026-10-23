<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType
{
    public const NO_LIMIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType = 'NO_LIMIT';
    public const ONLY_AD_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType = 'ONLY_AD';
    public const ONLY_AD_SHARED_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType = 'ONLY_AD_SHARED';
    public const ONLY_ECP_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType = 'ONLY_ECP';
    public const ONLY_LOCAL_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType = 'ONLY_LOCAL';

    public const ALLOWED_VALUES = [
        self::NO_LIMIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType,
        self::ONLY_AD_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType,
        self::ONLY_AD_SHARED_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType,
        self::ONLY_ECP_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType,
        self::ONLY_LOCAL_SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletBalanceGetV30WalletBalanceFiltersAccountPlatformType', $value));
        }
        return (string) $value;
    }
}
