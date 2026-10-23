<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletDailyStatGetV30AccountType
{
    public const AD_SharedWalletDailyStatGetV30AccountType = 'AD';
    public const AGENT_SharedWalletDailyStatGetV30AccountType = 'AGENT';
    public const LOCAL_SharedWalletDailyStatGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletDailyStatGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletDailyStatGetV30AccountType,
        self::AGENT_SharedWalletDailyStatGetV30AccountType,
        self::LOCAL_SharedWalletDailyStatGetV30AccountType,
        self::QIANCHUAN_SharedWalletDailyStatGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletDailyStatGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
