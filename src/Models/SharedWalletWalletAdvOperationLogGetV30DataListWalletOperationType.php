<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType
{
    public const BIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType = 'bind';
    public const TRANSFER_BIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType = 'transfer_bind';
    public const TRANSFER_UNBIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType = 'transfer_unbind';
    public const UNBIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType = 'unbind';

    public const ALLOWED_VALUES = [
        self::BIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType,
        self::TRANSFER_BIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType,
        self::TRANSFER_UNBIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType,
        self::UNBIND_SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletAdvOperationLogGetV30DataListWalletOperationType', $value));
        }
        return (string) $value;
    }
}
