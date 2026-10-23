<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectBudgetUpdateV30DataBudgetMode
{
    public const BUDGET_MODE_DAY_ProjectBudgetUpdateV30DataBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_ProjectBudgetUpdateV30DataBudgetMode = 'BUDGET_MODE_INFINITE';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_ProjectBudgetUpdateV30DataBudgetMode,
        self::BUDGET_MODE_INFINITE_ProjectBudgetUpdateV30DataBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectBudgetUpdateV30DataBudgetMode', $value));
        }
        return (string) $value;
    }
}
