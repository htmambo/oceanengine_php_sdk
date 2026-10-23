<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletMainWalletGetV30AccountType
{
    public const AD_SharedWalletMainWalletGetV30AccountType = 'AD';
    public const AGENT_SharedWalletMainWalletGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletMainWalletGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletMainWalletGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletMainWalletGetV30AccountType,
        self::AGENT_SharedWalletMainWalletGetV30AccountType,
        self::LOCAL_SharedWalletMainWalletGetV30AccountType,
        self::QIANCHUAN_SharedWalletMainWalletGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletMainWalletGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
