<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportTodayLiveRoomDataGetV10DataTopic
{
    public const ROOM_FLOW_PERFORMANCE_QianchuanReportTodayLiveRoomDataGetV10DataTopic = 'ROOM_FLOW_PERFORMANCE';
    public const ROOM_PRODUCT_LIST_QianchuanReportTodayLiveRoomDataGetV10DataTopic = 'ROOM_PRODUCT_LIST';

    public const ALLOWED_VALUES = [
        self::ROOM_FLOW_PERFORMANCE_QianchuanReportTodayLiveRoomDataGetV10DataTopic,
        self::ROOM_PRODUCT_LIST_QianchuanReportTodayLiveRoomDataGetV10DataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportTodayLiveRoomDataGetV10DataTopic', $value));
        }
        return (string) $value;
    }
}
