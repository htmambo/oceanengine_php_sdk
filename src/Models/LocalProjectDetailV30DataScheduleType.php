<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataScheduleType
{
    public const DAILY_DELIVERY_DURATION_LocalProjectDetailV30DataScheduleType = 'DAILY_DELIVERY_DURATION';
    public const DELIVERY_7_DAY_LocalProjectDetailV30DataScheduleType = 'DELIVERY_7DAY';
    public const FIXED_TIME_LocalProjectDetailV30DataScheduleType = 'FIXED_TIME';
    public const FROM_NOW_ON_LocalProjectDetailV30DataScheduleType = 'FROM_NOW_ON';
    public const START_TO_END_LocalProjectDetailV30DataScheduleType = 'START_TO_END';

    public const ALLOWED_VALUES = [
        self::DAILY_DELIVERY_DURATION_LocalProjectDetailV30DataScheduleType,
        self::DELIVERY_7_DAY_LocalProjectDetailV30DataScheduleType,
        self::FIXED_TIME_LocalProjectDetailV30DataScheduleType,
        self::FROM_NOW_ON_LocalProjectDetailV30DataScheduleType,
        self::START_TO_END_LocalProjectDetailV30DataScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataScheduleType', $value));
        }
        return (string) $value;
    }
}
