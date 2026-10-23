<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch
{
    public const OFF_OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch = 'OFF';
    public const ON_OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch,
        self::ON_OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseGetV30DataListRaiseInfoAdjustMaterialSwitch', $value));
        }
        return (string) $value;
    }
}
