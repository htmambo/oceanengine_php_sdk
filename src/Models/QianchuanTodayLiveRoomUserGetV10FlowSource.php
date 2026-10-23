<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomUserGetV10FlowSource
{
    public const ALL_QianchuanTodayLiveRoomUserGetV10FlowSource = 'ALL';
    public const PC_QianchuanTodayLiveRoomUserGetV10FlowSource = 'PC';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveRoomUserGetV10FlowSource,
        self::PC_QianchuanTodayLiveRoomUserGetV10FlowSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomUserGetV10FlowSource', $value));
        }
        return (string) $value;
    }
}
