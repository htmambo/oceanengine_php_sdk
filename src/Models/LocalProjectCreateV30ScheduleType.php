<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30ScheduleType
{
    public const DAILY_DELIVERY_DURATION_LocalProjectCreateV30ScheduleType = 'DAILY_DELIVERY_DURATION';
    public const DELIVERY_7_DAY_LocalProjectCreateV30ScheduleType = 'DELIVERY_7DAY';
    public const FIXED_TIME_LocalProjectCreateV30ScheduleType = 'FIXED_TIME';
    public const FROM_NOW_ON_LocalProjectCreateV30ScheduleType = 'FROM_NOW_ON';
    public const START_TO_END_LocalProjectCreateV30ScheduleType = 'START_TO_END';

    public const ALLOWED_VALUES = [
        self::DAILY_DELIVERY_DURATION_LocalProjectCreateV30ScheduleType,
        self::DELIVERY_7_DAY_LocalProjectCreateV30ScheduleType,
        self::FIXED_TIME_LocalProjectCreateV30ScheduleType,
        self::FROM_NOW_ON_LocalProjectCreateV30ScheduleType,
        self::START_TO_END_LocalProjectCreateV30ScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30ScheduleType', $value));
        }
        return (string) $value;
    }
}
