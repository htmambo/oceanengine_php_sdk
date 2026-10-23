<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType
{
    public const LIVE_MATERIALS_OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType = 'LIVE_MATERIALS';
    public const PROJECT_MATERIALS_OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType = 'PROJECT_MATERIALS';
    public const SPECIFY_MATERIALS_OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType = 'SPECIFY_MATERIALS';

    public const ALLOWED_VALUES = [
        self::LIVE_MATERIALS_OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType,
        self::PROJECT_MATERIALS_OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType,
        self::SPECIFY_MATERIALS_OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectStdProjectToolsGetV30DataProjectAdjustInfoMaterialAdjustInfoMaterialAdjustType', $value));
        }
        return (string) $value;
    }
}
