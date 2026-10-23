<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BudgetGroupListV30FilteringAdType
{
    public const ALL_BudgetGroupListV30FilteringAdType = 'ALL';
    public const SEARCH_BudgetGroupListV30FilteringAdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_BudgetGroupListV30FilteringAdType,
        self::SEARCH_BudgetGroupListV30FilteringAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BudgetGroupListV30FilteringAdType', $value));
        }
        return (string) $value;
    }
}
