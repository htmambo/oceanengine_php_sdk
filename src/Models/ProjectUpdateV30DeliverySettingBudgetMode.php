<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30DeliverySettingBudgetMode
{
    public const BUDGET_MODE_DAY_ProjectUpdateV30DeliverySettingBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_ProjectUpdateV30DeliverySettingBudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_TOTAL_ProjectUpdateV30DeliverySettingBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_ProjectUpdateV30DeliverySettingBudgetMode,
        self::BUDGET_MODE_INFINITE_ProjectUpdateV30DeliverySettingBudgetMode,
        self::BUDGET_MODE_TOTAL_ProjectUpdateV30DeliverySettingBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30DeliverySettingBudgetMode', $value));
        }
        return (string) $value;
    }
}
