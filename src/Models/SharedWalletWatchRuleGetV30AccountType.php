<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleGetV30AccountType
{
    public const AD_SharedWalletWatchRuleGetV30AccountType = 'AD';
    public const AGENT_SharedWalletWatchRuleGetV30AccountType = 'AGENT';
    public const BP_SharedWalletWatchRuleGetV30AccountType = 'BP';
    public const LOCAL_SharedWalletWatchRuleGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletWatchRuleGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletWatchRuleGetV30AccountType,
        self::AGENT_SharedWalletWatchRuleGetV30AccountType,
        self::BP_SharedWalletWatchRuleGetV30AccountType,
        self::LOCAL_SharedWalletWatchRuleGetV30AccountType,
        self::QIANCHUAN_SharedWalletWatchRuleGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
