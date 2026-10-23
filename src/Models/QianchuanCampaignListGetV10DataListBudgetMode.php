<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignListGetV10DataListBudgetMode
{
    public const BUDGET_MODE_DAY_QianchuanCampaignListGetV10DataListBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_QianchuanCampaignListGetV10DataListBudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_TOTAL_QianchuanCampaignListGetV10DataListBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_QianchuanCampaignListGetV10DataListBudgetMode,
        self::BUDGET_MODE_INFINITE_QianchuanCampaignListGetV10DataListBudgetMode,
        self::BUDGET_MODE_TOTAL_QianchuanCampaignListGetV10DataListBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignListGetV10DataListBudgetMode', $value));
        }
        return (string) $value;
    }
}
