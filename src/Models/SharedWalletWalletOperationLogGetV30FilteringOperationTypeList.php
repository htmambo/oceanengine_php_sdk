<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletOperationLogGetV30FilteringOperationTypeList
{
    public const BIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList = 'bind';
    public const TRANSFER_BIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList = 'transfer_bind';
    public const TRANSFER_UNBIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList = 'transfer_unbind';
    public const UNBIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList = 'unbind';

    public const ALLOWED_VALUES = [
        self::BIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList,
        self::TRANSFER_BIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList,
        self::TRANSFER_UNBIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList,
        self::UNBIND_SharedWalletWalletOperationLogGetV30FilteringOperationTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletOperationLogGetV30FilteringOperationTypeList', $value));
        }
        return (string) $value;
    }
}
