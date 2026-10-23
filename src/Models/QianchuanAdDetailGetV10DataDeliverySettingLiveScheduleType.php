<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType = 'SCHEDULE_START_END';
    public const SCHEDULE_TIME_FIXEDRANGE_QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType = 'SCHEDULE_TIME_FIXEDRANGE';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType,
        self::SCHEDULE_START_END_QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType,
        self::SCHEDULE_TIME_FIXEDRANGE_QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataDeliverySettingLiveScheduleType', $value));
        }
        return (string) $value;
    }
}
