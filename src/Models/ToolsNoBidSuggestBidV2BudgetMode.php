<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsNoBidSuggestBidV2BudgetMode
{
    public const BUDGET_MODE_TOTAL_ToolsNoBidSuggestBidV2BudgetMode = 'BUDGET_MODE_TOTAL';
    public const BUDGET_MODE_INFINITE_ToolsNoBidSuggestBidV2BudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_DAY_ToolsNoBidSuggestBidV2BudgetMode = 'BUDGET_MODE_DAY';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_TOTAL_ToolsNoBidSuggestBidV2BudgetMode,
        self::BUDGET_MODE_INFINITE_ToolsNoBidSuggestBidV2BudgetMode,
        self::BUDGET_MODE_DAY_ToolsNoBidSuggestBidV2BudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsNoBidSuggestBidV2BudgetMode', $value));
        }
        return (string) $value;
    }
}
