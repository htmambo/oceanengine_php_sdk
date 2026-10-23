<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanQianchuanReportTodayLiveRoomConfigGetV10DataTopics
{
    public const ROOM_FLOW_PERFORMANCE_QianchuanQianchuanReportTodayLiveRoomConfigGetV10DataTopics = 'ROOM_FLOW_PERFORMANCE';
    public const ROOM_PRODUCT_LIST_QianchuanQianchuanReportTodayLiveRoomConfigGetV10DataTopics = 'ROOM_PRODUCT_LIST';

    public const ALLOWED_VALUES = [
        self::ROOM_FLOW_PERFORMANCE_QianchuanQianchuanReportTodayLiveRoomConfigGetV10DataTopics,
        self::ROOM_PRODUCT_LIST_QianchuanQianchuanReportTodayLiveRoomConfigGetV10DataTopics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanQianchuanReportTodayLiveRoomConfigGetV10DataTopics', $value));
        }
        return (string) $value;
    }
}
