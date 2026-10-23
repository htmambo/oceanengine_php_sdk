<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectScheduleTimeUpdateV30DataScheduleType
{
    public const SCHEDULE_FROM_NOW_ProjectScheduleTimeUpdateV30DataScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_ProjectScheduleTimeUpdateV30DataScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_ProjectScheduleTimeUpdateV30DataScheduleType,
        self::SCHEDULE_START_END_ProjectScheduleTimeUpdateV30DataScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectScheduleTimeUpdateV30DataScheduleType', $value));
        }
        return (string) $value;
    }
}
