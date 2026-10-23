<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListDeliverySettingBudgetMode
{
    public const BUDGET_MODE_DAY_QianchuanAdGetV10DataListDeliverySettingBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_QianchuanAdGetV10DataListDeliverySettingBudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_SEVEN_DAY_CYCLE_QianchuanAdGetV10DataListDeliverySettingBudgetMode = 'BUDGET_MODE_SEVEN_DAY_CYCLE';
    public const BUDGET_MODE_TOTAL_QianchuanAdGetV10DataListDeliverySettingBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_QianchuanAdGetV10DataListDeliverySettingBudgetMode,
        self::BUDGET_MODE_INFINITE_QianchuanAdGetV10DataListDeliverySettingBudgetMode,
        self::BUDGET_MODE_SEVEN_DAY_CYCLE_QianchuanAdGetV10DataListDeliverySettingBudgetMode,
        self::BUDGET_MODE_TOTAL_QianchuanAdGetV10DataListDeliverySettingBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListDeliverySettingBudgetMode', $value));
        }
        return (string) $value;
    }
}
