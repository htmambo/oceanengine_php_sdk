<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataBudgetMode
{
    public const ALL_LocalOcProjectGetV30DataBudgetMode = 'ALL';
    public const BUDGET_MODE_DAY_LocalOcProjectGetV30DataBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_TOTAL_LocalOcProjectGetV30DataBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalOcProjectGetV30DataBudgetMode,
        self::BUDGET_MODE_DAY_LocalOcProjectGetV30DataBudgetMode,
        self::BUDGET_MODE_TOTAL_LocalOcProjectGetV30DataBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataBudgetMode', $value));
        }
        return (string) $value;
    }
}
