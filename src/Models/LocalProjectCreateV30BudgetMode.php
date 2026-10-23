<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30BudgetMode
{
    public const ALL_LocalProjectCreateV30BudgetMode = 'ALL';
    public const BUDGET_MODE_7_DAY_TOTAL_LocalProjectCreateV30BudgetMode = 'BUDGET_MODE_7DAY_TOTAL';
    public const BUDGET_MODE_DAY_LocalProjectCreateV30BudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_TOTAL_LocalProjectCreateV30BudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectCreateV30BudgetMode,
        self::BUDGET_MODE_7_DAY_TOTAL_LocalProjectCreateV30BudgetMode,
        self::BUDGET_MODE_DAY_LocalProjectCreateV30BudgetMode,
        self::BUDGET_MODE_TOTAL_LocalProjectCreateV30BudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30BudgetMode', $value));
        }
        return (string) $value;
    }
}
