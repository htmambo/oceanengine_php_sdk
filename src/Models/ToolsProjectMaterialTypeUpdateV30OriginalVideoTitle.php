<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle
{
    public const ON_ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle = 'ON';
    public const OFF_ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle,
        self::OFF_ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30OriginalVideoTitle', $value));
        }
        return (string) $value;
    }
}
