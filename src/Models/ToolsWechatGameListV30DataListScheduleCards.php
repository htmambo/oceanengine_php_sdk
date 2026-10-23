<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListScheduleCards
{
    public const ANNUAL_ToolsWechatGameListV30DataListScheduleCards = 'Annual';
    public const LIFETIME_ToolsWechatGameListV30DataListScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsWechatGameListV30DataListScheduleCards = 'Monthly';
    public const NONE_ToolsWechatGameListV30DataListScheduleCards = 'None';
    public const QUARTERLY_ToolsWechatGameListV30DataListScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsWechatGameListV30DataListScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsWechatGameListV30DataListScheduleCards,
        self::LIFETIME_ToolsWechatGameListV30DataListScheduleCards,
        self::MONTHLY_ToolsWechatGameListV30DataListScheduleCards,
        self::NONE_ToolsWechatGameListV30DataListScheduleCards,
        self::QUARTERLY_ToolsWechatGameListV30DataListScheduleCards,
        self::WEEKLY_ToolsWechatGameListV30DataListScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListScheduleCards', $value));
        }
        return (string) $value;
    }
}
