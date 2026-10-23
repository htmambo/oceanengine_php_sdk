<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30ScheduleType
{
    public const SCHEDULE_7_DAYS_StdProjectUpdateV30ScheduleType = 'SCHEDULE_7_DAYS';
    public const SCHEDULE_FROM_NOW_StdProjectUpdateV30ScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_StdProjectUpdateV30ScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_7_DAYS_StdProjectUpdateV30ScheduleType,
        self::SCHEDULE_FROM_NOW_StdProjectUpdateV30ScheduleType,
        self::SCHEDULE_START_END_StdProjectUpdateV30ScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30ScheduleType', $value));
        }
        return (string) $value;
    }
}
