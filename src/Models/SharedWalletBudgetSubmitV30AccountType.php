<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletBudgetSubmitV30AccountType
{
    public const AGENT_SharedWalletBudgetSubmitV30AccountType = 'AGENT';
    public const BP_SharedWalletBudgetSubmitV30AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_SharedWalletBudgetSubmitV30AccountType,
        self::BP_SharedWalletBudgetSubmitV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletBudgetSubmitV30AccountType', $value));
        }
        return (string) $value;
    }
}
