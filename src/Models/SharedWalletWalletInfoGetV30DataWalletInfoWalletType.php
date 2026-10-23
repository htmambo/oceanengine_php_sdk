<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoWalletType
{
    public const MAIN_WALLET_SharedWalletWalletInfoGetV30DataWalletInfoWalletType = 'MAIN_WALLET';
    public const SUB_CONSUME_WALLET_SharedWalletWalletInfoGetV30DataWalletInfoWalletType = 'SUB_CONSUME_WALLET';
    public const SUB_MANAGE_WALLET_SharedWalletWalletInfoGetV30DataWalletInfoWalletType = 'SUB_MANAGE_WALLET';

    public const ALLOWED_VALUES = [
        self::MAIN_WALLET_SharedWalletWalletInfoGetV30DataWalletInfoWalletType,
        self::SUB_CONSUME_WALLET_SharedWalletWalletInfoGetV30DataWalletInfoWalletType,
        self::SUB_MANAGE_WALLET_SharedWalletWalletInfoGetV30DataWalletInfoWalletType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoWalletType', $value));
        }
        return (string) $value;
    }
}
