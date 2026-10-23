<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletBudgetSubmitV30BudgetBudgetMode
{
    public const DAY_SharedWalletBudgetSubmitV30BudgetBudgetMode = 'DAY';
    public const INFINITE_SharedWalletBudgetSubmitV30BudgetBudgetMode = 'INFINITE';

    public const ALLOWED_VALUES = [
        self::DAY_SharedWalletBudgetSubmitV30BudgetBudgetMode,
        self::INFINITE_SharedWalletBudgetSubmitV30BudgetBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletBudgetSubmitV30BudgetBudgetMode', $value));
        }
        return (string) $value;
    }
}
