<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30DataListAgeLimit
{
    public const EIGHTEEN_PLUS_ToolsMicroGameListV30DataListAgeLimit = 'EIGHTEEN_PLUS';
    public const EIGHT_PLUS_ToolsMicroGameListV30DataListAgeLimit = 'EIGHT_PLUS';
    public const FOUR_PLUS_ToolsMicroGameListV30DataListAgeLimit = 'FOUR_PLUS';
    public const SIXTEEN_PLUS_ToolsMicroGameListV30DataListAgeLimit = 'SIXTEEN_PLUS';
    public const TWELVE_PLUS_ToolsMicroGameListV30DataListAgeLimit = 'TWELVE_PLUS';

    public const ALLOWED_VALUES = [
        self::EIGHTEEN_PLUS_ToolsMicroGameListV30DataListAgeLimit,
        self::EIGHT_PLUS_ToolsMicroGameListV30DataListAgeLimit,
        self::FOUR_PLUS_ToolsMicroGameListV30DataListAgeLimit,
        self::SIXTEEN_PLUS_ToolsMicroGameListV30DataListAgeLimit,
        self::TWELVE_PLUS_ToolsMicroGameListV30DataListAgeLimit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30DataListAgeLimit', $value));
        }
        return (string) $value;
    }
}
