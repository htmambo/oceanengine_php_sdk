<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30PeakWeekDays
{
    public const FRIDAY_LocalProjectCreateV30PeakWeekDays = 'FRIDAY';
    public const MONDAY_LocalProjectCreateV30PeakWeekDays = 'MONDAY';
    public const SATURDAY_LocalProjectCreateV30PeakWeekDays = 'SATURDAY';
    public const SUNDAY_LocalProjectCreateV30PeakWeekDays = 'SUNDAY';
    public const THURSDAY_LocalProjectCreateV30PeakWeekDays = 'THURSDAY';
    public const TUESDAY_LocalProjectCreateV30PeakWeekDays = 'TUESDAY';
    public const WEDNESDAY_LocalProjectCreateV30PeakWeekDays = 'WEDNESDAY';

    public const ALLOWED_VALUES = [
        self::FRIDAY_LocalProjectCreateV30PeakWeekDays,
        self::MONDAY_LocalProjectCreateV30PeakWeekDays,
        self::SATURDAY_LocalProjectCreateV30PeakWeekDays,
        self::SUNDAY_LocalProjectCreateV30PeakWeekDays,
        self::THURSDAY_LocalProjectCreateV30PeakWeekDays,
        self::TUESDAY_LocalProjectCreateV30PeakWeekDays,
        self::WEDNESDAY_LocalProjectCreateV30PeakWeekDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30PeakWeekDays', $value));
        }
        return (string) $value;
    }
}
