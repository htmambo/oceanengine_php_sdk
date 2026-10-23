<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupListV30FilteringBudgetGroupStatusSecond
{
    public const ACCOUNT_EXCEEDED_BudgetGroupListV30FilteringBudgetGroupStatusSecond = 'ACCOUNT_EXCEEDED';
    public const GROUP_EXCEEDED_BudgetGroupListV30FilteringBudgetGroupStatusSecond = 'GROUP_EXCEEDED';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_EXCEEDED_BudgetGroupListV30FilteringBudgetGroupStatusSecond,
        self::GROUP_EXCEEDED_BudgetGroupListV30FilteringBudgetGroupStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupListV30FilteringBudgetGroupStatusSecond', $value));
        }
        return (string) $value;
    }
}
