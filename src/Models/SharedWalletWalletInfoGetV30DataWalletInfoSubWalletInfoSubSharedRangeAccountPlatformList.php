<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList
{
    public const AD_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList = 'AD';
    public const ECP_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList = 'ECP';
    public const LOCAL_ADS_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList = 'LOCAL_ADS';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList,
        self::ECP_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList,
        self::LOCAL_ADS_SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoSubWalletInfoSubSharedRangeAccountPlatformList', $value));
        }
        return (string) $value;
    }
}
