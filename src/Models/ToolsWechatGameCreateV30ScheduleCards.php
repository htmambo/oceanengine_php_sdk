<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameCreateV30ScheduleCards
{
    public const ANNUAL_ToolsWechatGameCreateV30ScheduleCards = 'Annual';
    public const LIFETIME_ToolsWechatGameCreateV30ScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsWechatGameCreateV30ScheduleCards = 'Monthly';
    public const NONE_ToolsWechatGameCreateV30ScheduleCards = 'None';
    public const QUARTERLY_ToolsWechatGameCreateV30ScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsWechatGameCreateV30ScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsWechatGameCreateV30ScheduleCards,
        self::LIFETIME_ToolsWechatGameCreateV30ScheduleCards,
        self::MONTHLY_ToolsWechatGameCreateV30ScheduleCards,
        self::NONE_ToolsWechatGameCreateV30ScheduleCards,
        self::QUARTERLY_ToolsWechatGameCreateV30ScheduleCards,
        self::WEEKLY_ToolsWechatGameCreateV30ScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameCreateV30ScheduleCards', $value));
        }
        return (string) $value;
    }
}
