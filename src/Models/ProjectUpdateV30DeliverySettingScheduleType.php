<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30DeliverySettingScheduleType
{
    public const SCHEDULE_FROM_NOW_ProjectUpdateV30DeliverySettingScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_ProjectUpdateV30DeliverySettingScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_ProjectUpdateV30DeliverySettingScheduleType,
        self::SCHEDULE_START_END_ProjectUpdateV30DeliverySettingScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30DeliverySettingScheduleType', $value));
        }
        return (string) $value;
    }
}
