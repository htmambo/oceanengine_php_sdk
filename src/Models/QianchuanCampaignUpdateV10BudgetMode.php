<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignUpdateV10BudgetMode
{
    public const BUDGET_MODE_DAY_QianchuanCampaignUpdateV10BudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_QianchuanCampaignUpdateV10BudgetMode = 'BUDGET_MODE_INFINITE';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_QianchuanCampaignUpdateV10BudgetMode,
        self::BUDGET_MODE_INFINITE_QianchuanCampaignUpdateV10BudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignUpdateV10BudgetMode', $value));
        }
        return (string) $value;
    }
}
