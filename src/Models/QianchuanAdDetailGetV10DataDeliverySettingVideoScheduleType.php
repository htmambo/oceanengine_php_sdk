<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType,
        self::SCHEDULE_START_END_QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataDeliverySettingVideoScheduleType', $value));
        }
        return (string) $value;
    }
}
