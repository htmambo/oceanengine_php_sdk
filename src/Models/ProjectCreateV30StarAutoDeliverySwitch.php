<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30StarAutoDeliverySwitch
{
    public const OFF_ProjectCreateV30StarAutoDeliverySwitch = 'OFF';
    public const ON_ProjectCreateV30StarAutoDeliverySwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30StarAutoDeliverySwitch,
        self::ON_ProjectCreateV30StarAutoDeliverySwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30StarAutoDeliverySwitch', $value));
        }
        return (string) $value;
    }
}
