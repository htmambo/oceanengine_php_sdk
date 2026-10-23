<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletTransactionDetailGetV30DataResultsPayeeType
{
    public const AGENT_SharedWalletTransactionDetailGetV30DataResultsPayeeType = 'AGENT';
    public const SHARED_WALLET_SharedWalletTransactionDetailGetV30DataResultsPayeeType = 'SHARED_WALLET';

    public const ALLOWED_VALUES = [
        self::AGENT_SharedWalletTransactionDetailGetV30DataResultsPayeeType,
        self::SHARED_WALLET_SharedWalletTransactionDetailGetV30DataResultsPayeeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletTransactionDetailGetV30DataResultsPayeeType', $value));
        }
        return (string) $value;
    }
}
