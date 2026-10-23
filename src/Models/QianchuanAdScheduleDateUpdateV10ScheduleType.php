<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdScheduleDateUpdateV10ScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanAdScheduleDateUpdateV10ScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanAdScheduleDateUpdateV10ScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanAdScheduleDateUpdateV10ScheduleType,
        self::SCHEDULE_START_END_QianchuanAdScheduleDateUpdateV10ScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdScheduleDateUpdateV10ScheduleType', $value));
        }
        return (string) $value;
    }
}
