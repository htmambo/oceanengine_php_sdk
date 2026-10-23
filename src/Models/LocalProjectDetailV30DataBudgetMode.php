<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataBudgetMode
{
    public const BUDGET_MODE_7_DAY_TOTAL_LocalProjectDetailV30DataBudgetMode = 'BUDGET_MODE_7DAY_TOTAL';
    public const BUDGET_MODE_DAY_LocalProjectDetailV30DataBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_TOTAL_LocalProjectDetailV30DataBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_7_DAY_TOTAL_LocalProjectDetailV30DataBudgetMode,
        self::BUDGET_MODE_DAY_LocalProjectDetailV30DataBudgetMode,
        self::BUDGET_MODE_TOTAL_LocalProjectDetailV30DataBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataBudgetMode', $value));
        }
        return (string) $value;
    }
}
