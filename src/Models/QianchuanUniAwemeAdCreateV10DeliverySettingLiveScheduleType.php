<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10DeliverySettingLiveScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanUniAwemeAdCreateV10DeliverySettingLiveScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanUniAwemeAdCreateV10DeliverySettingLiveScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanUniAwemeAdCreateV10DeliverySettingLiveScheduleType,
        self::SCHEDULE_START_END_QianchuanUniAwemeAdCreateV10DeliverySettingLiveScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10DeliverySettingLiveScheduleType', $value));
        }
        return (string) $value;
    }
}
