<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingFilterNightSwitch
{
    public const OFF_ProjectCreateV30DeliverySettingFilterNightSwitch = 'OFF';
    public const ON_ProjectCreateV30DeliverySettingFilterNightSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30DeliverySettingFilterNightSwitch,
        self::ON_ProjectCreateV30DeliverySettingFilterNightSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingFilterNightSwitch', $value));
        }
        return (string) $value;
    }
}
