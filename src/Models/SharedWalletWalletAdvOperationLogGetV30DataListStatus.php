<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletAdvOperationLogGetV30DataListStatus
{
    public const FAIL_SharedWalletWalletAdvOperationLogGetV30DataListStatus = 'fail';
    public const PREPARE_SharedWalletWalletAdvOperationLogGetV30DataListStatus = 'prepare';
    public const SUCCESS_SharedWalletWalletAdvOperationLogGetV30DataListStatus = 'success';
    public const TRIGGERED_SharedWalletWalletAdvOperationLogGetV30DataListStatus = 'triggered';
    public const UNBIND_SUSPEND_SharedWalletWalletAdvOperationLogGetV30DataListStatus = 'unbind_suspend';

    public const ALLOWED_VALUES = [
        self::FAIL_SharedWalletWalletAdvOperationLogGetV30DataListStatus,
        self::PREPARE_SharedWalletWalletAdvOperationLogGetV30DataListStatus,
        self::SUCCESS_SharedWalletWalletAdvOperationLogGetV30DataListStatus,
        self::TRIGGERED_SharedWalletWalletAdvOperationLogGetV30DataListStatus,
        self::UNBIND_SUSPEND_SharedWalletWalletAdvOperationLogGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletAdvOperationLogGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
