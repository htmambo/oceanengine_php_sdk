<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomGetV10AdStatus
{
    public const ALL_QianchuanTodayLiveRoomGetV10AdStatus = 'ALL';
    public const DELIVERY_OK_QianchuanTodayLiveRoomGetV10AdStatus = 'DELIVERY_OK';
    public const NO_DELIVERY_QianchuanTodayLiveRoomGetV10AdStatus = 'NO_DELIVERY';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveRoomGetV10AdStatus,
        self::DELIVERY_OK_QianchuanTodayLiveRoomGetV10AdStatus,
        self::NO_DELIVERY_QianchuanTodayLiveRoomGetV10AdStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomGetV10AdStatus', $value));
        }
        return (string) $value;
    }
}
