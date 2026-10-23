<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletOperationLogGetV30FilteringStatusFilter
{
    public const ALL_SharedWalletWalletOperationLogGetV30FilteringStatusFilter = 'all';
    public const ONLY_FINISH_SharedWalletWalletOperationLogGetV30FilteringStatusFilter = 'only_finish';

    public const ALLOWED_VALUES = [
        self::ALL_SharedWalletWalletOperationLogGetV30FilteringStatusFilter,
        self::ONLY_FINISH_SharedWalletWalletOperationLogGetV30FilteringStatusFilter,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletOperationLogGetV30FilteringStatusFilter', $value));
        }
        return (string) $value;
    }
}
