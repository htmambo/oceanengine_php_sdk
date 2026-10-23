<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseCreateV30MaterialsType
{
    public const LIVE_MATERIALS_OcProjectToolsMaterialRaiseCreateV30MaterialsType = 'LIVE_MATERIALS';
    public const PROJECT_MATERIALS_OcProjectToolsMaterialRaiseCreateV30MaterialsType = 'PROJECT_MATERIALS';
    public const SPECIFY_MATERIALS_OcProjectToolsMaterialRaiseCreateV30MaterialsType = 'SPECIFY_MATERIALS';

    public const ALLOWED_VALUES = [
        self::LIVE_MATERIALS_OcProjectToolsMaterialRaiseCreateV30MaterialsType,
        self::PROJECT_MATERIALS_OcProjectToolsMaterialRaiseCreateV30MaterialsType,
        self::SPECIFY_MATERIALS_OcProjectToolsMaterialRaiseCreateV30MaterialsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseCreateV30MaterialsType', $value));
        }
        return (string) $value;
    }
}
