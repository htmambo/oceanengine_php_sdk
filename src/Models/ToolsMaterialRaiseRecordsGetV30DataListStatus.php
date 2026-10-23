<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMaterialRaiseRecordsGetV30DataListStatus
{
    public const FINISH_RAISE_ToolsMaterialRaiseRecordsGetV30DataListStatus = 'FINISH_RAISE';
    public const RAISING_ToolsMaterialRaiseRecordsGetV30DataListStatus = 'RAISING';

    public const ALLOWED_VALUES = [
        self::FINISH_RAISE_ToolsMaterialRaiseRecordsGetV30DataListStatus,
        self::RAISING_ToolsMaterialRaiseRecordsGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMaterialRaiseRecordsGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
