<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomUserGetV10ActionEvent
{
    public const ENTER_QianchuanTodayLiveRoomUserGetV10ActionEvent = 'ENTER';
    public const PAY_QianchuanTodayLiveRoomUserGetV10ActionEvent = 'PAY';

    public const ALLOWED_VALUES = [
        self::ENTER_QianchuanTodayLiveRoomUserGetV10ActionEvent,
        self::PAY_QianchuanTodayLiveRoomUserGetV10ActionEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomUserGetV10ActionEvent', $value));
        }
        return (string) $value;
    }
}
