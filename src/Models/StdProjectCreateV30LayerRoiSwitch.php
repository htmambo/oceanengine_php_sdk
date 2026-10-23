<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30LayerRoiSwitch
{
    public const OFF_StdProjectCreateV30LayerRoiSwitch = 'OFF';
    public const ON_StdProjectCreateV30LayerRoiSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectCreateV30LayerRoiSwitch,
        self::ON_StdProjectCreateV30LayerRoiSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30LayerRoiSwitch', $value));
        }
        return (string) $value;
    }
}
