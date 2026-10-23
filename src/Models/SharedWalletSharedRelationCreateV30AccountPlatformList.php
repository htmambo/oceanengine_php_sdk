<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletSharedRelationCreateV30AccountPlatformList
{
    public const AD_SharedWalletSharedRelationCreateV30AccountPlatformList = 'AD';
    public const ECP_SharedWalletSharedRelationCreateV30AccountPlatformList = 'ECP';
    public const LOCAL_ADS_SharedWalletSharedRelationCreateV30AccountPlatformList = 'LOCAL_ADS';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletSharedRelationCreateV30AccountPlatformList,
        self::ECP_SharedWalletSharedRelationCreateV30AccountPlatformList,
        self::LOCAL_ADS_SharedWalletSharedRelationCreateV30AccountPlatformList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletSharedRelationCreateV30AccountPlatformList', $value));
        }
        return (string) $value;
    }
}
