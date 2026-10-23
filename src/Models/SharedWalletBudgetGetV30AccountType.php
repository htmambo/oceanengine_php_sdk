<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletBudgetGetV30AccountType
{
    public const AD_SharedWalletBudgetGetV30AccountType = 'AD';
    public const AGENT_SharedWalletBudgetGetV30AccountType = 'AGENT';
    public const BP_SharedWalletBudgetGetV30AccountType = 'BP';
    public const LOCAL_SharedWalletBudgetGetV30AccountType = 'LOCAL';
    public const QIANCHUAN_SharedWalletBudgetGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SharedWalletBudgetGetV30AccountType,
        self::AGENT_SharedWalletBudgetGetV30AccountType,
        self::BP_SharedWalletBudgetGetV30AccountType,
        self::LOCAL_SharedWalletBudgetGetV30AccountType,
        self::QIANCHUAN_SharedWalletBudgetGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletBudgetGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
