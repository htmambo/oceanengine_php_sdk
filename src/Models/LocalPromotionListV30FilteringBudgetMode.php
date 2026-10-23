<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringBudgetMode
{
    public const ALL_LocalPromotionListV30FilteringBudgetMode = 'ALL';
    public const BUDGET_MODE_7_DAY_TOTAL_LocalPromotionListV30FilteringBudgetMode = 'BUDGET_MODE_7DAY_TOTAL';
    public const BUDGET_MODE_DAY_LocalPromotionListV30FilteringBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_TOTAL_LocalPromotionListV30FilteringBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringBudgetMode,
        self::BUDGET_MODE_7_DAY_TOTAL_LocalPromotionListV30FilteringBudgetMode,
        self::BUDGET_MODE_DAY_LocalPromotionListV30FilteringBudgetMode,
        self::BUDGET_MODE_TOTAL_LocalPromotionListV30FilteringBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringBudgetMode', $value));
        }
        return (string) $value;
    }
}
