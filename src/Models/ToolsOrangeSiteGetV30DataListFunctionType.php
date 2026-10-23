<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsOrangeSiteGetV30DataListFunctionType
{
    public const SITE_FUNC_TYPE_NEW_MODULAR_ToolsOrangeSiteGetV30DataListFunctionType = 'SITE_FUNC_TYPE_NEW_MODULAR';
    public const SITE_FUNC_TYPE_NORMAL_ToolsOrangeSiteGetV30DataListFunctionType = 'SITE_FUNC_TYPE_NORMAL';

    public const ALLOWED_VALUES = [
        self::SITE_FUNC_TYPE_NEW_MODULAR_ToolsOrangeSiteGetV30DataListFunctionType,
        self::SITE_FUNC_TYPE_NORMAL_ToolsOrangeSiteGetV30DataListFunctionType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsOrangeSiteGetV30DataListFunctionType', $value));
        }
        return (string) $value;
    }
}
