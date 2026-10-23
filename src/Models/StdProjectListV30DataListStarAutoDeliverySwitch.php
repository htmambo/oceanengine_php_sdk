<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListStarAutoDeliverySwitch
{
    public const OFF_StdProjectListV30DataListStarAutoDeliverySwitch = 'OFF';
    public const ON_StdProjectListV30DataListStarAutoDeliverySwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectListV30DataListStarAutoDeliverySwitch,
        self::ON_StdProjectListV30DataListStarAutoDeliverySwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListStarAutoDeliverySwitch', $value));
        }
        return (string) $value;
    }
}
