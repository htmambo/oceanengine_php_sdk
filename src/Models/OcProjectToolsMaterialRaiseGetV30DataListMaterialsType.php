<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsMaterialRaiseGetV30DataListMaterialsType
{
    public const LIVE_MATERIALS_OcProjectToolsMaterialRaiseGetV30DataListMaterialsType = 'LIVE_MATERIALS';
    public const PROJECT_MATERIALS_OcProjectToolsMaterialRaiseGetV30DataListMaterialsType = 'PROJECT_MATERIALS';
    public const SPECIFY_MATERIALS_OcProjectToolsMaterialRaiseGetV30DataListMaterialsType = 'SPECIFY_MATERIALS';

    public const ALLOWED_VALUES = [
        self::LIVE_MATERIALS_OcProjectToolsMaterialRaiseGetV30DataListMaterialsType,
        self::PROJECT_MATERIALS_OcProjectToolsMaterialRaiseGetV30DataListMaterialsType,
        self::SPECIFY_MATERIALS_OcProjectToolsMaterialRaiseGetV30DataListMaterialsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsMaterialRaiseGetV30DataListMaterialsType', $value));
        }
        return (string) $value;
    }
}
