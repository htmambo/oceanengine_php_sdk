<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType
{
    public const RAISE_NOW_ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType = 'RAISE_NOW';

    public const ALLOWED_VALUES = [
        self::RAISE_NOW_ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMaterialRaiseCreateV30RaiseInfoRaiseEffectiveType', $value));
        }
        return (string) $value;
    }
}
