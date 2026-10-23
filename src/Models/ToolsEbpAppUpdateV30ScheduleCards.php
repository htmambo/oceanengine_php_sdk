<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30ScheduleCards
{
    public const ANNUAL_ToolsEbpAppUpdateV30ScheduleCards = 'Annual';
    public const LIFETIME_ToolsEbpAppUpdateV30ScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsEbpAppUpdateV30ScheduleCards = 'Monthly';
    public const NONE_ToolsEbpAppUpdateV30ScheduleCards = 'None';
    public const QUARTERLY_ToolsEbpAppUpdateV30ScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsEbpAppUpdateV30ScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsEbpAppUpdateV30ScheduleCards,
        self::LIFETIME_ToolsEbpAppUpdateV30ScheduleCards,
        self::MONTHLY_ToolsEbpAppUpdateV30ScheduleCards,
        self::NONE_ToolsEbpAppUpdateV30ScheduleCards,
        self::QUARTERLY_ToolsEbpAppUpdateV30ScheduleCards,
        self::WEEKLY_ToolsEbpAppUpdateV30ScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30ScheduleCards', $value));
        }
        return (string) $value;
    }
}
