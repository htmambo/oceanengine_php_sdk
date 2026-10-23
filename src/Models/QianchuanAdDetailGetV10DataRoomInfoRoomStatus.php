<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataRoomInfoRoomStatus
{
    public const ALL_QianchuanAdDetailGetV10DataRoomInfoRoomStatus = 'ALL';
    public const FINISH_QianchuanAdDetailGetV10DataRoomInfoRoomStatus = 'FINISH';
    public const LIVING_QianchuanAdDetailGetV10DataRoomInfoRoomStatus = 'LIVING';
    public const PAUSE_QianchuanAdDetailGetV10DataRoomInfoRoomStatus = 'PAUSE';
    public const PREPARE_QianchuanAdDetailGetV10DataRoomInfoRoomStatus = 'PREPARE';
    public const UNKNOWN_QianchuanAdDetailGetV10DataRoomInfoRoomStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdDetailGetV10DataRoomInfoRoomStatus,
        self::FINISH_QianchuanAdDetailGetV10DataRoomInfoRoomStatus,
        self::LIVING_QianchuanAdDetailGetV10DataRoomInfoRoomStatus,
        self::PAUSE_QianchuanAdDetailGetV10DataRoomInfoRoomStatus,
        self::PREPARE_QianchuanAdDetailGetV10DataRoomInfoRoomStatus,
        self::UNKNOWN_QianchuanAdDetailGetV10DataRoomInfoRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataRoomInfoRoomStatus', $value));
        }
        return (string) $value;
    }
}
