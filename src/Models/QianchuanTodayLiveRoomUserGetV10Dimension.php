<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomUserGetV10Dimension
{
    public const AGE_QianchuanTodayLiveRoomUserGetV10Dimension = 'AGE';
    public const CITY_QianchuanTodayLiveRoomUserGetV10Dimension = 'CITY';
    public const GENDER_QianchuanTodayLiveRoomUserGetV10Dimension = 'GENDER';

    public const ALLOWED_VALUES = [
        self::AGE_QianchuanTodayLiveRoomUserGetV10Dimension,
        self::CITY_QianchuanTodayLiveRoomUserGetV10Dimension,
        self::GENDER_QianchuanTodayLiveRoomUserGetV10Dimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomUserGetV10Dimension', $value));
        }
        return (string) $value;
    }
}
