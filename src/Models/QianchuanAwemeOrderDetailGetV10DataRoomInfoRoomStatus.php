<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus
{
    public const FINISH_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus = 'FINISH';
    public const LIVING_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus = 'LIVING';
    public const PAUSE_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus = 'PAUSE';
    public const PREPARE_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus = 'PREPARE';
    public const UNKNOW_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus = 'UNKNOW';

    public const ALLOWED_VALUES = [
        self::FINISH_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus,
        self::LIVING_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus,
        self::PAUSE_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus,
        self::PREPARE_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus,
        self::UNKNOW_QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus', $value));
        }
        return (string) $value;
    }
}
