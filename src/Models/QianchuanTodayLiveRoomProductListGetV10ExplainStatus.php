<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomProductListGetV10ExplainStatus
{
    public const ALL_QianchuanTodayLiveRoomProductListGetV10ExplainStatus = 'ALL';
    public const HASEXPLAIN_QianchuanTodayLiveRoomProductListGetV10ExplainStatus = 'HASEXPLAIN';
    public const UNEXPLAIN_QianchuanTodayLiveRoomProductListGetV10ExplainStatus = 'UNEXPLAIN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanTodayLiveRoomProductListGetV10ExplainStatus,
        self::HASEXPLAIN_QianchuanTodayLiveRoomProductListGetV10ExplainStatus,
        self::UNEXPLAIN_QianchuanTodayLiveRoomProductListGetV10ExplainStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomProductListGetV10ExplainStatus', $value));
        }
        return (string) $value;
    }
}
