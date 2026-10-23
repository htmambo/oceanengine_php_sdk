<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListScheduleType
{
    public const SCHEDULE_7_DAYS_StdProjectListV30DataListScheduleType = 'SCHEDULE_7_DAYS';
    public const SCHEDULE_FROM_NOW_StdProjectListV30DataListScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_StdProjectListV30DataListScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_7_DAYS_StdProjectListV30DataListScheduleType,
        self::SCHEDULE_FROM_NOW_StdProjectListV30DataListScheduleType,
        self::SCHEDULE_START_END_StdProjectListV30DataListScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListScheduleType', $value));
        }
        return (string) $value;
    }
}
