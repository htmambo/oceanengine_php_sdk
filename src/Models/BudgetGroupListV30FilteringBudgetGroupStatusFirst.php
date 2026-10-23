<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupListV30FilteringBudgetGroupStatusFirst
{
    public const DELETED_BudgetGroupListV30FilteringBudgetGroupStatusFirst = 'DELETED';
    public const ENABLE_BudgetGroupListV30FilteringBudgetGroupStatusFirst = 'ENABLE';
    public const UNDELIVERIED_BudgetGroupListV30FilteringBudgetGroupStatusFirst = 'UNDELIVERIED';

    public const ALLOWED_VALUES = [
        self::DELETED_BudgetGroupListV30FilteringBudgetGroupStatusFirst,
        self::ENABLE_BudgetGroupListV30FilteringBudgetGroupStatusFirst,
        self::UNDELIVERIED_BudgetGroupListV30FilteringBudgetGroupStatusFirst,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupListV30FilteringBudgetGroupStatusFirst', $value));
        }
        return (string) $value;
    }
}
