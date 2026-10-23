<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameCreateV30ScheduleCards
{
    public const ANNUAL_ToolsMicroGameCreateV30ScheduleCards = 'Annual';
    public const LIFETIME_ToolsMicroGameCreateV30ScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsMicroGameCreateV30ScheduleCards = 'Monthly';
    public const NONE_ToolsMicroGameCreateV30ScheduleCards = 'None';
    public const QUARTERLY_ToolsMicroGameCreateV30ScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsMicroGameCreateV30ScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsMicroGameCreateV30ScheduleCards,
        self::LIFETIME_ToolsMicroGameCreateV30ScheduleCards,
        self::MONTHLY_ToolsMicroGameCreateV30ScheduleCards,
        self::NONE_ToolsMicroGameCreateV30ScheduleCards,
        self::QUARTERLY_ToolsMicroGameCreateV30ScheduleCards,
        self::WEEKLY_ToolsMicroGameCreateV30ScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameCreateV30ScheduleCards', $value));
        }
        return (string) $value;
    }
}
