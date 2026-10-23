<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletEbpRelationGetV30WalletTypes
{
    public const SUB_CONSUME_WALLET_SharedWalletWalletEbpRelationGetV30WalletTypes = 'SUB_CONSUME_WALLET';
    public const SUB_MANAGE_WALLET_SharedWalletWalletEbpRelationGetV30WalletTypes = 'SUB_MANAGE_WALLET';

    public const ALLOWED_VALUES = [
        self::SUB_CONSUME_WALLET_SharedWalletWalletEbpRelationGetV30WalletTypes,
        self::SUB_MANAGE_WALLET_SharedWalletWalletEbpRelationGetV30WalletTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletEbpRelationGetV30WalletTypes', $value));
        }
        return (string) $value;
    }
}
