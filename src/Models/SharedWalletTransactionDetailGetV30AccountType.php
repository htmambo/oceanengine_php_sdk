<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletTransactionDetailGetV30AccountType
{
    public const AD_SharedWalletTransactionDetailGetV30AccountType = 'AD';
    public const AGENT_SharedWalletTransactionDetailGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletTransactionDetailGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletTransactionDetailGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletTransactionDetailGetV30AccountType,
        self::AGENT_SharedWalletTransactionDetailGetV30AccountType,
        self::LOCAL_SharedWalletTransactionDetailGetV30AccountType,
        self::QIANCHUAN_SharedWalletTransactionDetailGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletTransactionDetailGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
