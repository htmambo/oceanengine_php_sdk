<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportTodayLiveRoomConfigGetV10DataTopics
{
    public const ROOM_FLOW_PERFORMANCE_QianchuanReportTodayLiveRoomConfigGetV10DataTopics = 'ROOM_FLOW_PERFORMANCE';
    public const ROOM_PRODUCT_LIST_QianchuanReportTodayLiveRoomConfigGetV10DataTopics = 'ROOM_PRODUCT_LIST';

    public const ALLOWED_VALUES = [
        self::ROOM_FLOW_PERFORMANCE_QianchuanReportTodayLiveRoomConfigGetV10DataTopics,
        self::ROOM_PRODUCT_LIST_QianchuanReportTodayLiveRoomConfigGetV10DataTopics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportTodayLiveRoomConfigGetV10DataTopics', $value));
        }
        return (string) $value;
    }
}
