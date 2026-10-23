<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType,
        self::SCHEDULE_START_END_QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallVideoCreateV10DeliverySettingVideoScheduleType', $value));
        }
        return (string) $value;
    }
}
