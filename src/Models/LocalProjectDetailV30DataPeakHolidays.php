<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataPeakHolidays
{
    public const CHINESE_VALENTINES_DAY_LocalProjectDetailV30DataPeakHolidays = 'CHINESE_VALENTINES_DAY';
    public const CHRISTMAS_LocalProjectDetailV30DataPeakHolidays = 'CHRISTMAS';
    public const DRAGON_BOAT_FESTIVAL_LocalProjectDetailV30DataPeakHolidays = 'DRAGON_BOAT_FESTIVAL';
    public const LABOUR_DAY_LocalProjectDetailV30DataPeakHolidays = 'LABOUR_DAY';
    public const MOON_FESTIVAL_LocalProjectDetailV30DataPeakHolidays = 'MOON_FESTIVAL';
    public const NATIONAL_DAY_LocalProjectDetailV30DataPeakHolidays = 'NATIONAL_DAY';
    public const NEW_YEAR_LocalProjectDetailV30DataPeakHolidays = 'NEW_YEAR';
    public const SHOPPING_DAY_1111_LocalProjectDetailV30DataPeakHolidays = 'SHOPPING_DAY_1111';
    public const SHOPPING_DAY_618_LocalProjectDetailV30DataPeakHolidays = 'SHOPPING_DAY_618';
    public const SPRING_FESTIVAL_LocalProjectDetailV30DataPeakHolidays = 'SPRING_FESTIVAL';
    public const VALENTINES_DAY_LocalProjectDetailV30DataPeakHolidays = 'VALENTINES_DAY';

    public const ALLOWED_VALUES = [
        self::CHINESE_VALENTINES_DAY_LocalProjectDetailV30DataPeakHolidays,
        self::CHRISTMAS_LocalProjectDetailV30DataPeakHolidays,
        self::DRAGON_BOAT_FESTIVAL_LocalProjectDetailV30DataPeakHolidays,
        self::LABOUR_DAY_LocalProjectDetailV30DataPeakHolidays,
        self::MOON_FESTIVAL_LocalProjectDetailV30DataPeakHolidays,
        self::NATIONAL_DAY_LocalProjectDetailV30DataPeakHolidays,
        self::NEW_YEAR_LocalProjectDetailV30DataPeakHolidays,
        self::SHOPPING_DAY_1111_LocalProjectDetailV30DataPeakHolidays,
        self::SHOPPING_DAY_618_LocalProjectDetailV30DataPeakHolidays,
        self::SPRING_FESTIVAL_LocalProjectDetailV30DataPeakHolidays,
        self::VALENTINES_DAY_LocalProjectDetailV30DataPeakHolidays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataPeakHolidays', $value));
        }
        return (string) $value;
    }
}
