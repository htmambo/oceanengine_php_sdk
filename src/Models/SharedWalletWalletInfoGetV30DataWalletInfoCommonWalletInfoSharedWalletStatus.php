<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus
{
    public const DEFUALT_SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus = 'DEFUALT';
    public const RECHARGE_LIMITED_SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus = 'RECHARGE_LIMITED';
    public const DELETED_SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus = 'DELETED';

    public const ALLOWED_VALUES = [
        self::DEFUALT_SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus,
        self::RECHARGE_LIMITED_SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus,
        self::DELETED_SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoCommonWalletInfoSharedWalletStatus', $value));
        }
        return (string) $value;
    }
}
