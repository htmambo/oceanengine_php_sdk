<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletDailyStatGetV30DataResultsWalletType
{
    public const MAIN_WALLET_SharedWalletDailyStatGetV30DataResultsWalletType = 'MAIN_WALLET';
    public const SUB_CONSUME_WALLET_SharedWalletDailyStatGetV30DataResultsWalletType = 'SUB_CONSUME_WALLET';
    public const SUB_MANAGE_WALLET_SharedWalletDailyStatGetV30DataResultsWalletType = 'SUB_MANAGE_WALLET';

    public const ALLOWED_VALUES = [
        self::MAIN_WALLET_SharedWalletDailyStatGetV30DataResultsWalletType,
        self::SUB_CONSUME_WALLET_SharedWalletDailyStatGetV30DataResultsWalletType,
        self::SUB_MANAGE_WALLET_SharedWalletDailyStatGetV30DataResultsWalletType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletDailyStatGetV30DataResultsWalletType', $value));
        }
        return (string) $value;
    }
}
