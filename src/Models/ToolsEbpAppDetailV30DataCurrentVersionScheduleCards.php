<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionScheduleCards
{
    public const ANNUAL_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards = 'Annual';
    public const LIFETIME_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards = 'Monthly';
    public const NONE_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards = 'None';
    public const QUARTERLY_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards,
        self::LIFETIME_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards,
        self::MONTHLY_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards,
        self::NONE_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards,
        self::QUARTERLY_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards,
        self::WEEKLY_ToolsEbpAppDetailV30DataCurrentVersionScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionScheduleCards', $value));
        }
        return (string) $value;
    }
}
