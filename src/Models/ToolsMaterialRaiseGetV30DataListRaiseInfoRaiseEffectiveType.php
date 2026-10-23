<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType
{
    public const RAISE_NOW_ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType = 'RAISE_NOW';

    public const ALLOWED_VALUES = [
        self::RAISE_NOW_ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMaterialRaiseGetV30DataListRaiseInfoRaiseEffectiveType', $value));
        }
        return (string) $value;
    }
}
