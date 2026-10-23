<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAccountBudgetUpdateV10BudgetMode
{
    public const INFINITE_QianchuanAccountBudgetUpdateV10BudgetMode = 'INFINITE';
    public const SPECIFIED_QianchuanAccountBudgetUpdateV10BudgetMode = 'SPECIFIED';

    public const ALLOWED_VALUES = [
        self::INFINITE_QianchuanAccountBudgetUpdateV10BudgetMode,
        self::SPECIFIED_QianchuanAccountBudgetUpdateV10BudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAccountBudgetUpdateV10BudgetMode', $value));
        }
        return (string) $value;
    }
}
