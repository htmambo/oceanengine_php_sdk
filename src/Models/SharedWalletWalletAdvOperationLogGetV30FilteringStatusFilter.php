<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter
{
    public const ALL_SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter = 'all';
    public const ONLY_FINISH_SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter = 'only_finish';

    public const ALLOWED_VALUES = [
        self::ALL_SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter,
        self::ONLY_FINISH_SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletAdvOperationLogGetV30FilteringStatusFilter', $value));
        }
        return (string) $value;
    }
}
