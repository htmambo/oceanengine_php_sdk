<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletBalanceGetV30AccountType
{
    public const AD_SharedWalletWalletBalanceGetV30AccountType = 'AD';
    public const AGENT_SharedWalletWalletBalanceGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletWalletBalanceGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletWalletBalanceGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletBalanceGetV30AccountType,
        self::AGENT_SharedWalletWalletBalanceGetV30AccountType,
        self::LOCAL_SharedWalletWalletBalanceGetV30AccountType,
        self::QIANCHUAN_SharedWalletWalletBalanceGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletBalanceGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
