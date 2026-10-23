<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListStarAutoDeliverySwitch
{
    public const OFF_ProjectListV30DataListStarAutoDeliverySwitch = 'OFF';
    public const ON_ProjectListV30DataListStarAutoDeliverySwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListStarAutoDeliverySwitch,
        self::ON_ProjectListV30DataListStarAutoDeliverySwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListStarAutoDeliverySwitch', $value));
        }
        return (string) $value;
    }
}
