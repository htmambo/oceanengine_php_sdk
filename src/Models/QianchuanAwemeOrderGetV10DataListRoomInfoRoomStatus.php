<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus
{
    public const FINISH_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus = 'FINISH';
    public const LIVING_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus = 'LIVING';
    public const PAUSE_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus = 'PAUSE';
    public const PREPARE_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus = 'PREPARE';
    public const UNKNOW_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus = 'UNKNOW';

    public const ALLOWED_VALUES = [
        self::FINISH_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus,
        self::LIVING_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus,
        self::PAUSE_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus,
        self::PREPARE_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus,
        self::UNKNOW_QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10DataListRoomInfoRoomStatus', $value));
        }
        return (string) $value;
    }
}
