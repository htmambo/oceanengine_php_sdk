<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType
{
    public const BIDDING_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType = 'BIDDING';
    public const BRAND_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType = 'BRAND';
    public const GENERAL_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType = 'GENERAL';
    public const NO_LIMIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType = 'NO_LIMIT';

    public const ALLOWED_VALUES = [
        self::BIDDING_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType,
        self::BRAND_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType,
        self::GENERAL_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType,
        self::NO_LIMIT_SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletBalanceGetV30WalletBalanceFiltersDeliveryType', $value));
        }
        return (string) $value;
    }
}
