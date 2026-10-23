<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupListV30DataBudgetGroupsAdType
{
    public const ALL_BudgetGroupListV30DataBudgetGroupsAdType = 'ALL';
    public const SEARCH_BudgetGroupListV30DataBudgetGroupsAdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_BudgetGroupListV30DataBudgetGroupsAdType,
        self::SEARCH_BudgetGroupListV30DataBudgetGroupsAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupListV30DataBudgetGroupsAdType', $value));
        }
        return (string) $value;
    }
}
