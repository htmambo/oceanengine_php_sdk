<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList
{
    public const AD_SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList = 'AD';
    public const ECP_SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList = 'ECP';
    public const LOCAL_ADS_SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList = 'LOCAL_ADS';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList,
        self::ECP_SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList,
        self::LOCAL_ADS_SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletSubWalletCreateV30SharedRangeAccountPlatformList', $value));
        }
        return (string) $value;
    }
}
