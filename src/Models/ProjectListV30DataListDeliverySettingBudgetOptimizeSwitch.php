<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch
{
    public const OFF_ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch = 'OFF';
    public const ON_ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch,
        self::ON_ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingBudgetOptimizeSwitch', $value));
        }
        return (string) $value;
    }
}
