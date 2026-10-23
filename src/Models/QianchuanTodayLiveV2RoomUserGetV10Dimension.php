<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveV2RoomUserGetV10Dimension
{
    public const AGE_QianchuanTodayLiveV2RoomUserGetV10Dimension = 'AGE';
    public const CITY_QianchuanTodayLiveV2RoomUserGetV10Dimension = 'CITY';
    public const GENDER_QianchuanTodayLiveV2RoomUserGetV10Dimension = 'GENDER';

    public const ALLOWED_VALUES = [
        self::AGE_QianchuanTodayLiveV2RoomUserGetV10Dimension,
        self::CITY_QianchuanTodayLiveV2RoomUserGetV10Dimension,
        self::GENDER_QianchuanTodayLiveV2RoomUserGetV10Dimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveV2RoomUserGetV10Dimension', $value));
        }
        return (string) $value;
    }
}
