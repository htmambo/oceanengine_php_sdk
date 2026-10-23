<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomDetailGetV10DataRoomStatus
{
    public const ALL_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus = 'ALL';
    public const FINISH_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus = 'FINISH';
    public const LIVING_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus = 'LIVING';
    public const PAUSE_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus = 'PAUSE';
    public const PREPARE_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus = 'PREPARE';
    public const UNKNOWN_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus,
        self::FINISH_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus,
        self::LIVING_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus,
        self::PAUSE_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus,
        self::PREPARE_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus,
        self::UNKNOWN_QianchuanTodayLiveRoomDetailGetV10DataRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomDetailGetV10DataRoomStatus', $value));
        }
        return (string) $value;
    }
}
