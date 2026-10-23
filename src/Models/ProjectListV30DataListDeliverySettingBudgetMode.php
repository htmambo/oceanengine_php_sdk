<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingBudgetMode
{
    public const BUDGET_MODE_DAY_ProjectListV30DataListDeliverySettingBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_ProjectListV30DataListDeliverySettingBudgetMode = 'BUDGET_MODE_INFINITE';
    public const BUDGET_MODE_TOTAL_ProjectListV30DataListDeliverySettingBudgetMode = 'BUDGET_MODE_TOTAL';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_ProjectListV30DataListDeliverySettingBudgetMode,
        self::BUDGET_MODE_INFINITE_ProjectListV30DataListDeliverySettingBudgetMode,
        self::BUDGET_MODE_TOTAL_ProjectListV30DataListDeliverySettingBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingBudgetMode', $value));
        }
        return (string) $value;
    }
}
