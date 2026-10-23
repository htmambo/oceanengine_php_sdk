<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus
{
    public const FINISH_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus = 'FINISH';
    public const LIVING_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus = 'LIVING';
    public const PAUSE_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus = 'PAUSE';
    public const PREPARE_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus = 'PREPARE';

    public const ALLOWED_VALUES = [
        self::FINISH_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus,
        self::LIVING_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus,
        self::PAUSE_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus,
        self::PREPARE_DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus', $value));
        }
        return (string) $value;
    }
}
