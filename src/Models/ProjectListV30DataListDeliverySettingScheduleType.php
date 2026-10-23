<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingScheduleType
{
    public const SCHEDULE_7_DAYS_ProjectListV30DataListDeliverySettingScheduleType = 'SCHEDULE_7_DAYS';
    public const SCHEDULE_FROM_NOW_ProjectListV30DataListDeliverySettingScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_ProjectListV30DataListDeliverySettingScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_7_DAYS_ProjectListV30DataListDeliverySettingScheduleType,
        self::SCHEDULE_FROM_NOW_ProjectListV30DataListDeliverySettingScheduleType,
        self::SCHEDULE_START_END_ProjectListV30DataListDeliverySettingScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingScheduleType', $value));
        }
        return (string) $value;
    }
}
