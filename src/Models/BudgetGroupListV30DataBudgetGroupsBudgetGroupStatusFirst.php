<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst
{
    public const DELETED_BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst = 'DELETED';
    public const ENABLE_BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst = 'ENABLE';
    public const UNDELIVERIED_BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst = 'UNDELIVERIED';

    public const ALLOWED_VALUES = [
        self::DELETED_BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst,
        self::ENABLE_BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst,
        self::UNDELIVERIED_BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupListV30DataBudgetGroupsBudgetGroupStatusFirst', $value));
        }
        return (string) $value;
    }
}
