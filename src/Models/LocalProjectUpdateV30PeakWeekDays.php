<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30PeakWeekDays
{
    public const FRIDAY_LocalProjectUpdateV30PeakWeekDays = 'FRIDAY';
    public const MONDAY_LocalProjectUpdateV30PeakWeekDays = 'MONDAY';
    public const SATURDAY_LocalProjectUpdateV30PeakWeekDays = 'SATURDAY';
    public const SUNDAY_LocalProjectUpdateV30PeakWeekDays = 'SUNDAY';
    public const THURSDAY_LocalProjectUpdateV30PeakWeekDays = 'THURSDAY';
    public const TUESDAY_LocalProjectUpdateV30PeakWeekDays = 'TUESDAY';
    public const WEDNESDAY_LocalProjectUpdateV30PeakWeekDays = 'WEDNESDAY';

    public const ALLOWED_VALUES = [
        self::FRIDAY_LocalProjectUpdateV30PeakWeekDays,
        self::MONDAY_LocalProjectUpdateV30PeakWeekDays,
        self::SATURDAY_LocalProjectUpdateV30PeakWeekDays,
        self::SUNDAY_LocalProjectUpdateV30PeakWeekDays,
        self::THURSDAY_LocalProjectUpdateV30PeakWeekDays,
        self::TUESDAY_LocalProjectUpdateV30PeakWeekDays,
        self::WEDNESDAY_LocalProjectUpdateV30PeakWeekDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30PeakWeekDays', $value));
        }
        return (string) $value;
    }
}
