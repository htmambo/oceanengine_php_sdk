<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveV2RoomUserGetV10FlowSource
{
    public const ALL_QianchuanTodayLiveV2RoomUserGetV10FlowSource = 'ALL';
    public const PC_QianchuanTodayLiveV2RoomUserGetV10FlowSource = 'PC';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveV2RoomUserGetV10FlowSource,
        self::PC_QianchuanTodayLiveV2RoomUserGetV10FlowSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveV2RoomUserGetV10FlowSource', $value));
        }
        return (string) $value;
    }
}
