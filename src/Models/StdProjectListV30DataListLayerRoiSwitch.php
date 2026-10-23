<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListLayerRoiSwitch
{
    public const ON_StdProjectListV30DataListLayerRoiSwitch = 'ON';
    public const OFF_StdProjectListV30DataListLayerRoiSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_StdProjectListV30DataListLayerRoiSwitch,
        self::OFF_StdProjectListV30DataListLayerRoiSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListLayerRoiSwitch', $value));
        }
        return (string) $value;
    }
}
