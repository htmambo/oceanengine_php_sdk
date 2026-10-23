<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanEstimateEffectV10LiveScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanEstimateEffectV10LiveScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanEstimateEffectV10LiveScheduleType = 'SCHEDULE_START_END';
    public const SCHEDULE_TIME_FIXEDRANGE_QianchuanEstimateEffectV10LiveScheduleType = 'SCHEDULE_TIME_FIXEDRANGE';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanEstimateEffectV10LiveScheduleType,
        self::SCHEDULE_START_END_QianchuanEstimateEffectV10LiveScheduleType,
        self::SCHEDULE_TIME_FIXEDRANGE_QianchuanEstimateEffectV10LiveScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanEstimateEffectV10LiveScheduleType', $value));
        }
        return (string) $value;
    }
}
