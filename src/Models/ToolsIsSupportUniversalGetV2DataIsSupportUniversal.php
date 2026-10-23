<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsIsSupportUniversalGetV2DataIsSupportUniversal
{
    public const CANNOT_UNIVERSAL_ToolsIsSupportUniversalGetV2DataIsSupportUniversal = 'CANNOT_UNIVERSAL';
    public const FORCE_UNIVERSAL_ToolsIsSupportUniversalGetV2DataIsSupportUniversal = 'FORCE_UNIVERSAL';
    public const SUPPORT_UNIVERSAL_ToolsIsSupportUniversalGetV2DataIsSupportUniversal = 'SUPPORT_UNIVERSAL';

    public const ALLOWED_VALUES = [
        self::CANNOT_UNIVERSAL_ToolsIsSupportUniversalGetV2DataIsSupportUniversal,
        self::FORCE_UNIVERSAL_ToolsIsSupportUniversalGetV2DataIsSupportUniversal,
        self::SUPPORT_UNIVERSAL_ToolsIsSupportUniversalGetV2DataIsSupportUniversal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsIsSupportUniversalGetV2DataIsSupportUniversal', $value));
        }
        return (string) $value;
    }
}
