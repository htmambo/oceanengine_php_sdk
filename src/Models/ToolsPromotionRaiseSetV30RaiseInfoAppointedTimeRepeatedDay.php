<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay
{
    public const EVERY_DAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'EVERY_DAY';
    public const PER_FRIDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_FRIDAY';
    public const PER_MONDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_MONDAY';
    public const PER_SATURDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_SATURDAY';
    public const PER_SUNDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_SUNDAY';
    public const PER_THURSDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_THURSDAY';
    public const PER_TUESDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_TUESDAY';
    public const PER_WEDNESDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay = 'PER_WEDNESDAY';

    public const ALLOWED_VALUES = [
        self::EVERY_DAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_FRIDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_MONDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_SATURDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_SUNDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_THURSDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_TUESDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
        self::PER_WEDNESDAY_ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPromotionRaiseSetV30RaiseInfoAppointedTimeRepeatedDay', $value));
        }
        return (string) $value;
    }
}
