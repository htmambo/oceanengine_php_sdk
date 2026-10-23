<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30DeliverySettingFilterNightSwitch
{
    public const OFF_ProjectUpdateV30DeliverySettingFilterNightSwitch = 'OFF';
    public const ON_ProjectUpdateV30DeliverySettingFilterNightSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectUpdateV30DeliverySettingFilterNightSwitch,
        self::ON_ProjectUpdateV30DeliverySettingFilterNightSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30DeliverySettingFilterNightSwitch', $value));
        }
        return (string) $value;
    }
}
