<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingBudgetOptimizeSwitch
{
    public const OFF_ProjectCreateV30DeliverySettingBudgetOptimizeSwitch = 'OFF';
    public const ON_ProjectCreateV30DeliverySettingBudgetOptimizeSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30DeliverySettingBudgetOptimizeSwitch,
        self::ON_ProjectCreateV30DeliverySettingBudgetOptimizeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingBudgetOptimizeSwitch', $value));
        }
        return (string) $value;
    }
}
