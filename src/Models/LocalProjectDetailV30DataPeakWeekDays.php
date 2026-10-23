<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataPeakWeekDays
{
    public const FRIDAY_LocalProjectDetailV30DataPeakWeekDays = 'FRIDAY';
    public const MONDAY_LocalProjectDetailV30DataPeakWeekDays = 'MONDAY';
    public const SATURDAY_LocalProjectDetailV30DataPeakWeekDays = 'SATURDAY';
    public const SUNDAY_LocalProjectDetailV30DataPeakWeekDays = 'SUNDAY';
    public const THURSDAY_LocalProjectDetailV30DataPeakWeekDays = 'THURSDAY';
    public const TUESDAY_LocalProjectDetailV30DataPeakWeekDays = 'TUESDAY';
    public const WEDNESDAY_LocalProjectDetailV30DataPeakWeekDays = 'WEDNESDAY';

    public const ALLOWED_VALUES = [
        self::FRIDAY_LocalProjectDetailV30DataPeakWeekDays,
        self::MONDAY_LocalProjectDetailV30DataPeakWeekDays,
        self::SATURDAY_LocalProjectDetailV30DataPeakWeekDays,
        self::SUNDAY_LocalProjectDetailV30DataPeakWeekDays,
        self::THURSDAY_LocalProjectDetailV30DataPeakWeekDays,
        self::TUESDAY_LocalProjectDetailV30DataPeakWeekDays,
        self::WEDNESDAY_LocalProjectDetailV30DataPeakWeekDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataPeakWeekDays', $value));
        }
        return (string) $value;
    }
}
