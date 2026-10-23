<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMaterialRaiseGetV30DataListStatus
{
    public const FINISH_RAISE_ToolsMaterialRaiseGetV30DataListStatus = 'FINISH_RAISE';
    public const RAISING_ToolsMaterialRaiseGetV30DataListStatus = 'RAISING';

    public const ALLOWED_VALUES = [
        self::FINISH_RAISE_ToolsMaterialRaiseGetV30DataListStatus,
        self::RAISING_ToolsMaterialRaiseGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMaterialRaiseGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
