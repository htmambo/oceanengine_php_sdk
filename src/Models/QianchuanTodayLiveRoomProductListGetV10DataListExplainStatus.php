<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus
{
    public const BEINGEXPLAIN_QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus = 'BEINGEXPLAIN';
    public const HASEXPLAIN_QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus = 'HASEXPLAIN';
    public const UNEXPLAIN_QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus = 'UNEXPLAIN';

    public const ALLOWED_VALUES = [
        self::BEINGEXPLAIN_QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus,
        self::HASEXPLAIN_QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus,
        self::UNEXPLAIN_QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomProductListGetV10DataListExplainStatus', $value));
        }
        return (string) $value;
    }
}
