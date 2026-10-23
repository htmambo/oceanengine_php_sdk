<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameUpdateV30AgeLimit
{
    public const EIGHTEEN_PLUS_ToolsMicroGameUpdateV30AgeLimit = 'EIGHTEEN_PLUS';
    public const EIGHT_PLUS_ToolsMicroGameUpdateV30AgeLimit = 'EIGHT_PLUS';
    public const FOUR_PLUS_ToolsMicroGameUpdateV30AgeLimit = 'FOUR_PLUS';
    public const SIXTEEN_PLUS_ToolsMicroGameUpdateV30AgeLimit = 'SIXTEEN_PLUS';
    public const TWELVE_PLUS_ToolsMicroGameUpdateV30AgeLimit = 'TWELVE_PLUS';

    public const ALLOWED_VALUES = [
        self::EIGHTEEN_PLUS_ToolsMicroGameUpdateV30AgeLimit,
        self::EIGHT_PLUS_ToolsMicroGameUpdateV30AgeLimit,
        self::FOUR_PLUS_ToolsMicroGameUpdateV30AgeLimit,
        self::SIXTEEN_PLUS_ToolsMicroGameUpdateV30AgeLimit,
        self::TWELVE_PLUS_ToolsMicroGameUpdateV30AgeLimit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameUpdateV30AgeLimit', $value));
        }
        return (string) $value;
    }
}
