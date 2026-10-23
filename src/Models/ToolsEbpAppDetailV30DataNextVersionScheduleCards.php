<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionScheduleCards
{
    public const ANNUAL_ToolsEbpAppDetailV30DataNextVersionScheduleCards = 'Annual';
    public const LIFETIME_ToolsEbpAppDetailV30DataNextVersionScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsEbpAppDetailV30DataNextVersionScheduleCards = 'Monthly';
    public const NONE_ToolsEbpAppDetailV30DataNextVersionScheduleCards = 'None';
    public const QUARTERLY_ToolsEbpAppDetailV30DataNextVersionScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsEbpAppDetailV30DataNextVersionScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsEbpAppDetailV30DataNextVersionScheduleCards,
        self::LIFETIME_ToolsEbpAppDetailV30DataNextVersionScheduleCards,
        self::MONTHLY_ToolsEbpAppDetailV30DataNextVersionScheduleCards,
        self::NONE_ToolsEbpAppDetailV30DataNextVersionScheduleCards,
        self::QUARTERLY_ToolsEbpAppDetailV30DataNextVersionScheduleCards,
        self::WEEKLY_ToolsEbpAppDetailV30DataNextVersionScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionScheduleCards', $value));
        }
        return (string) $value;
    }
}
