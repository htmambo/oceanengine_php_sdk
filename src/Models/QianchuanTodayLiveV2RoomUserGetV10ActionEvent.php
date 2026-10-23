<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveV2RoomUserGetV10ActionEvent
{
    public const ENTER_QianchuanTodayLiveV2RoomUserGetV10ActionEvent = 'ENTER';
    public const PAY_QianchuanTodayLiveV2RoomUserGetV10ActionEvent = 'PAY';

    public const ALLOWED_VALUES = [
        self::ENTER_QianchuanTodayLiveV2RoomUserGetV10ActionEvent,
        self::PAY_QianchuanTodayLiveV2RoomUserGetV10ActionEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveV2RoomUserGetV10ActionEvent', $value));
        }
        return (string) $value;
    }
}
