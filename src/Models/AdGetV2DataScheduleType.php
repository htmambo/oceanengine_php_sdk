<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataScheduleType
{
    public const SCHEDULE_FROM_NOW_AdGetV2DataScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_AdGetV2DataScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_AdGetV2DataScheduleType,
        self::SCHEDULE_START_END_AdGetV2DataScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataScheduleType', $value));
        }
        return (string) $value;
    }
}
