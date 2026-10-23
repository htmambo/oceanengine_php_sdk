<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay
{
    public const EVERY_DAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'EVERY_DAY';
    public const PER_FRIDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_FRIDAY';
    public const PER_MONDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_MONDAY';
    public const PER_SATURDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_SATURDAY';
    public const PER_SUNDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_SUNDAY';
    public const PER_THURSDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_THURSDAY';
    public const PER_TUESDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_TUESDAY';
    public const PER_WEDNESDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay = 'PER_WEDNESDAY';

    public const ALLOWED_VALUES = [
        self::EVERY_DAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_FRIDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_MONDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_SATURDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_SUNDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_THURSDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_TUESDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
        self::PER_WEDNESDAY_ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionRaiseStatusGetV30DataListRaiseInfoAppointTimeRepeatDay', $value));
        }
        return (string) $value;
    }
}
