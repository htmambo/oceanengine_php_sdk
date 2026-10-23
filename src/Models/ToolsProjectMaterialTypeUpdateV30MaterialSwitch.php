<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialSwitch
{
    public const ON_ToolsProjectMaterialTypeUpdateV30MaterialSwitch = 'ON';
    public const OFF_ToolsProjectMaterialTypeUpdateV30MaterialSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_ToolsProjectMaterialTypeUpdateV30MaterialSwitch,
        self::OFF_ToolsProjectMaterialTypeUpdateV30MaterialSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialSwitch', $value));
        }
        return (string) $value;
    }
}
