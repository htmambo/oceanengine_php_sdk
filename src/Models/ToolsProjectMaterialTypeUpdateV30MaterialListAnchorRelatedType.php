<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType
{
    public const AUTO_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType = 'AUTO';
    public const OFF_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType = 'OFF';
    public const SELECT_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType,
        self::OFF_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType,
        self::SELECT_ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialListAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
