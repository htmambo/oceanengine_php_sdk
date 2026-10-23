<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataDeliverySettingBudgetMode
{
    public const BUDGET_MODE_DAY_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_SEVEN_DAY_CYCLE_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode = 'BUDGET_MODE_SEVEN_DAY_CYCLE';
    public const BUDGET_MODE_TOTAL_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode,
        self::BUDGET_MODE_INFINITE_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode,
        self::BUDGET_MODE_SEVEN_DAY_CYCLE_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode,
        self::BUDGET_MODE_TOTAL_QianchuanAdDetailGetV10DataDeliverySettingBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataDeliverySettingBudgetMode', $value));
        }
        return (string) $value;
    }
}
