<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch
{
    public const ON_OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch = 'ON';
    public const OFF_OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch,
        self::OFF_OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseCreateV30RaiseInfoAdjustMaterialSwitch', $value));
        }
        return (string) $value;
    }
}
