<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomGetV10RoomStatus
{
    public const ALL_QianchuanTodayLiveRoomGetV10RoomStatus = 'ALL';
    public const FINISH_QianchuanTodayLiveRoomGetV10RoomStatus = 'FINISH';
    public const LIVING_QianchuanTodayLiveRoomGetV10RoomStatus = 'LIVING';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveRoomGetV10RoomStatus,
        self::FINISH_QianchuanTodayLiveRoomGetV10RoomStatus,
        self::LIVING_QianchuanTodayLiveRoomGetV10RoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomGetV10RoomStatus', $value));
        }
        return (string) $value;
    }
}
