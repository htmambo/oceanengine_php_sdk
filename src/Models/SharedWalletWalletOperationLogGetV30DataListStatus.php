<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletOperationLogGetV30DataListStatus
{
    public const FAIL_SharedWalletWalletOperationLogGetV30DataListStatus = 'fail';
    public const PARTIAL_SUCCESS_SharedWalletWalletOperationLogGetV30DataListStatus = 'partial_success';
    public const PREPARE_SharedWalletWalletOperationLogGetV30DataListStatus = 'prepare';
    public const RELATION_CHANGE_ADV_TRIGGERED_SharedWalletWalletOperationLogGetV30DataListStatus = 'relation_change_adv_triggered';
    public const SUCCESS_SharedWalletWalletOperationLogGetV30DataListStatus = 'success';
    public const TRIGGERED_SharedWalletWalletOperationLogGetV30DataListStatus = 'triggered';

    public const ALLOWED_VALUES = [
        self::FAIL_SharedWalletWalletOperationLogGetV30DataListStatus,
        self::PARTIAL_SUCCESS_SharedWalletWalletOperationLogGetV30DataListStatus,
        self::PREPARE_SharedWalletWalletOperationLogGetV30DataListStatus,
        self::RELATION_CHANGE_ADV_TRIGGERED_SharedWalletWalletOperationLogGetV30DataListStatus,
        self::SUCCESS_SharedWalletWalletOperationLogGetV30DataListStatus,
        self::TRIGGERED_SharedWalletWalletOperationLogGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletOperationLogGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
