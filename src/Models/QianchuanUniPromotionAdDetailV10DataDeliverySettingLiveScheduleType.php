<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType
{
    public const SCHEDULE_FROM_NOW_QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType = 'SCHEDULE_FROM_NOW';
    public const SCHEDULE_START_END_QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType = 'SCHEDULE_START_END';

    public const ALLOWED_VALUES = [
        self::SCHEDULE_FROM_NOW_QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType,
        self::SCHEDULE_START_END_QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataDeliverySettingLiveScheduleType', $value));
        }
        return (string) $value;
    }
}
