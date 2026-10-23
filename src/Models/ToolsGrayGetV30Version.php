<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsGrayGetV30Version
{
    public const OLD_VERSION_ToolsGrayGetV30Version = 'OLD_VERSION';
    public const UPDATED_VERSION_ToolsGrayGetV30Version = 'UPDATED_VERSION';
    public const ORG_VERSION_ToolsGrayGetV30Version = 'ORG_VERSION';

    public const ALLOWED_VALUES = [
        self::OLD_VERSION_ToolsGrayGetV30Version,
        self::UPDATED_VERSION_ToolsGrayGetV30Version,
        self::ORG_VERSION_ToolsGrayGetV30Version,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsGrayGetV30Version', $value));
        }
        return (string) $value;
    }
}
