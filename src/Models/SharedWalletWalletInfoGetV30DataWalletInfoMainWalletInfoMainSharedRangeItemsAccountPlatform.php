<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform
{
    public const AD_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform = 'AD';
    public const ECP_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform = 'ECP';
    public const LOCAL_ADS_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform = 'LOCAL_ADS';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform,
        self::ECP_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform,
        self::LOCAL_ADS_SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30DataWalletInfoMainWalletInfoMainSharedRangeItemsAccountPlatform', $value));
        }
        return (string) $value;
    }
}
