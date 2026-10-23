<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAdvertiserBudgetGetV30DataListBudgetMode
{
    public const ALL_LocalAdvertiserBudgetGetV30DataListBudgetMode = 'ALL';
    public const BUDGET_MODE_DAY_LocalAdvertiserBudgetGetV30DataListBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_TOTAL_LocalAdvertiserBudgetGetV30DataListBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalAdvertiserBudgetGetV30DataListBudgetMode,
        self::BUDGET_MODE_DAY_LocalAdvertiserBudgetGetV30DataListBudgetMode,
        self::BUDGET_MODE_TOTAL_LocalAdvertiserBudgetGetV30DataListBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAdvertiserBudgetGetV30DataListBudgetMode', $value));
        }
        return (string) $value;
    }
}
