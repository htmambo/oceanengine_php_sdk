<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWalletInfoGetV30AccountType
{
    public const AD_SharedWalletWalletInfoGetV30AccountType = 'AD';
    public const AGENT_SharedWalletWalletInfoGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletWalletInfoGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletWalletInfoGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWalletInfoGetV30AccountType,
        self::AGENT_SharedWalletWalletInfoGetV30AccountType,
        self::LOCAL_SharedWalletWalletInfoGetV30AccountType,
        self::QIANCHUAN_SharedWalletWalletInfoGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWalletInfoGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
