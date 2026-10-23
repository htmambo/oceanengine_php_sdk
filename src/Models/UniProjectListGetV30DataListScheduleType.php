<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListScheduleType
{
    public const SCHEDULE_FROM_NOW_UniProjectListGetV30DataListScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_UniProjectListGetV30DataListScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_UniProjectListGetV30DataListScheduleType,
        self::SCHEDULE_START_END_UniProjectListGetV30DataListScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListScheduleType', $value));
        }
        return (string) $value;
    }
}
