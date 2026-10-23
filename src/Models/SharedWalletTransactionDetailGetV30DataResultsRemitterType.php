<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletTransactionDetailGetV30DataResultsRemitterType
{
    public const AGENT_SharedWalletTransactionDetailGetV30DataResultsRemitterType = 'AGENT';
    public const SHARED_WALLET_SharedWalletTransactionDetailGetV30DataResultsRemitterType = 'SHARED_WALLET';

    public const ALLOWED_VALUES = [
        self::AGENT_SharedWalletTransactionDetailGetV30DataResultsRemitterType,
        self::SHARED_WALLET_SharedWalletTransactionDetailGetV30DataResultsRemitterType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletTransactionDetailGetV30DataResultsRemitterType', $value));
        }
        return (string) $value;
    }
}
