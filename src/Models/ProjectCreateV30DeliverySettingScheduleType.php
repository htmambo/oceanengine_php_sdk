<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingScheduleType
{
    public const SCHEDULE_7_DAYS_ProjectCreateV30DeliverySettingScheduleType = 'SCHEDULE_7_DAYS';
    public const SCHEDULE_FROM_NOW_ProjectCreateV30DeliverySettingScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_ProjectCreateV30DeliverySettingScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_7_DAYS_ProjectCreateV30DeliverySettingScheduleType,
        self::SCHEDULE_FROM_NOW_ProjectCreateV30DeliverySettingScheduleType,
        self::SCHEDULE_START_END_ProjectCreateV30DeliverySettingScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingScheduleType', $value));
        }
        return (string) $value;
    }
}
