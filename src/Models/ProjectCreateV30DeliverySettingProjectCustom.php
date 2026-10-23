<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingProjectCustom
{
    public const OFF_ProjectCreateV30DeliverySettingProjectCustom = 'OFF';
    public const ON_ProjectCreateV30DeliverySettingProjectCustom = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30DeliverySettingProjectCustom,
        self::ON_ProjectCreateV30DeliverySettingProjectCustom,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingProjectCustom', $value));
        }
        return (string) $value;
    }
}
