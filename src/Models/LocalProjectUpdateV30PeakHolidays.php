<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30PeakHolidays
{
    public const CHINESE_VALENTINES_DAY_LocalProjectUpdateV30PeakHolidays = 'CHINESE_VALENTINES_DAY';
    public const CHRISTMAS_LocalProjectUpdateV30PeakHolidays = 'CHRISTMAS';
    public const DRAGON_BOAT_FESTIVAL_LocalProjectUpdateV30PeakHolidays = 'DRAGON_BOAT_FESTIVAL';
    public const LABOUR_DAY_LocalProjectUpdateV30PeakHolidays = 'LABOUR_DAY';
    public const MOON_FESTIVAL_LocalProjectUpdateV30PeakHolidays = 'MOON_FESTIVAL';
    public const NATIONAL_DAY_LocalProjectUpdateV30PeakHolidays = 'NATIONAL_DAY';
    public const NEW_YEAR_LocalProjectUpdateV30PeakHolidays = 'NEW_YEAR';
    public const SHOPPING_DAY_1111_LocalProjectUpdateV30PeakHolidays = 'SHOPPING_DAY_1111';
    public const SHOPPING_DAY_618_LocalProjectUpdateV30PeakHolidays = 'SHOPPING_DAY_618';
    public const SPRING_FESTIVAL_LocalProjectUpdateV30PeakHolidays = 'SPRING_FESTIVAL';
    public const VALENTINES_DAY_LocalProjectUpdateV30PeakHolidays = 'VALENTINES_DAY';

    public const ALLOWED_VALUES = [
        self::CHINESE_VALENTINES_DAY_LocalProjectUpdateV30PeakHolidays,
        self::CHRISTMAS_LocalProjectUpdateV30PeakHolidays,
        self::DRAGON_BOAT_FESTIVAL_LocalProjectUpdateV30PeakHolidays,
        self::LABOUR_DAY_LocalProjectUpdateV30PeakHolidays,
        self::MOON_FESTIVAL_LocalProjectUpdateV30PeakHolidays,
        self::NATIONAL_DAY_LocalProjectUpdateV30PeakHolidays,
        self::NEW_YEAR_LocalProjectUpdateV30PeakHolidays,
        self::SHOPPING_DAY_1111_LocalProjectUpdateV30PeakHolidays,
        self::SHOPPING_DAY_618_LocalProjectUpdateV30PeakHolidays,
        self::SPRING_FESTIVAL_LocalProjectUpdateV30PeakHolidays,
        self::VALENTINES_DAY_LocalProjectUpdateV30PeakHolidays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30PeakHolidays', $value));
        }
        return (string) $value;
    }
}
