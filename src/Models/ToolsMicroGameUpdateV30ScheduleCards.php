<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameUpdateV30ScheduleCards
{
    public const ANNUAL_ToolsMicroGameUpdateV30ScheduleCards = 'Annual';
    public const LIFETIME_ToolsMicroGameUpdateV30ScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsMicroGameUpdateV30ScheduleCards = 'Monthly';
    public const NONE_ToolsMicroGameUpdateV30ScheduleCards = 'None';
    public const QUARTERLY_ToolsMicroGameUpdateV30ScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsMicroGameUpdateV30ScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsMicroGameUpdateV30ScheduleCards,
        self::LIFETIME_ToolsMicroGameUpdateV30ScheduleCards,
        self::MONTHLY_ToolsMicroGameUpdateV30ScheduleCards,
        self::NONE_ToolsMicroGameUpdateV30ScheduleCards,
        self::QUARTERLY_ToolsMicroGameUpdateV30ScheduleCards,
        self::WEEKLY_ToolsMicroGameUpdateV30ScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameUpdateV30ScheduleCards', $value));
        }
        return (string) $value;
    }
}
