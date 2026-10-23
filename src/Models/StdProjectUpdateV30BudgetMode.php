<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30BudgetMode
{
    public const BUDGET_MODE_DAY_StdProjectUpdateV30BudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_StdProjectUpdateV30BudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_TOTAL_StdProjectUpdateV30BudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_StdProjectUpdateV30BudgetMode,
        self::BUDGET_MODE_INFINITE_StdProjectUpdateV30BudgetMode,
        self::BUDGET_MODE_TOTAL_StdProjectUpdateV30BudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30BudgetMode', $value));
        }
        return (string) $value;
    }
}
