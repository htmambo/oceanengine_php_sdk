<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10DeliverySettingBudgetMode
{
    public const BUDGET_MODE_DAY_QianchuanAdCreateV10DeliverySettingBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_SEVEN_DAY_CYCLE_QianchuanAdCreateV10DeliverySettingBudgetMode = 'BUDGET_MODE_SEVEN_DAY_CYCLE';
    public const BUDGET_MODE_TOTAL_QianchuanAdCreateV10DeliverySettingBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_QianchuanAdCreateV10DeliverySettingBudgetMode,
        self::BUDGET_MODE_SEVEN_DAY_CYCLE_QianchuanAdCreateV10DeliverySettingBudgetMode,
        self::BUDGET_MODE_TOTAL_QianchuanAdCreateV10DeliverySettingBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10DeliverySettingBudgetMode', $value));
        }
        return (string) $value;
    }
}
