<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30DataListScheduleCards
{
    public const ANNUAL_ToolsMicroGameListV30DataListScheduleCards = 'Annual';
    public const LIFETIME_ToolsMicroGameListV30DataListScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsMicroGameListV30DataListScheduleCards = 'Monthly';
    public const NONE_ToolsMicroGameListV30DataListScheduleCards = 'None';
    public const QUARTERLY_ToolsMicroGameListV30DataListScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsMicroGameListV30DataListScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsMicroGameListV30DataListScheduleCards,
        self::LIFETIME_ToolsMicroGameListV30DataListScheduleCards,
        self::MONTHLY_ToolsMicroGameListV30DataListScheduleCards,
        self::NONE_ToolsMicroGameListV30DataListScheduleCards,
        self::QUARTERLY_ToolsMicroGameListV30DataListScheduleCards,
        self::WEEKLY_ToolsMicroGameListV30DataListScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30DataListScheduleCards', $value));
        }
        return (string) $value;
    }
}
