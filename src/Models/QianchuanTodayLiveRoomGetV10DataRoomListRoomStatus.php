<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus
{
    public const ALL_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus = 'ALL';
    public const FINISH_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus = 'FINISH';
    public const LIVING_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus = 'LIVING';
    public const PAUSE_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus = 'PAUSE';
    public const PREPARE_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus = 'PREPARE';
    public const UNKNOWN_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus,
        self::FINISH_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus,
        self::LIVING_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus,
        self::PAUSE_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus,
        self::PREPARE_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus,
        self::UNKNOWN_QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomGetV10DataRoomListRoomStatus', $value));
        }
        return (string) $value;
    }
}
