<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode
{
    public const BUDGET_MODE_DAY_QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_TOTAL_QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode,
        self::BUDGET_MODE_INFINITE_QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode,
        self::BUDGET_MODE_TOTAL_QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoBudgetMode', $value));
        }
        return (string) $value;
    }
}
