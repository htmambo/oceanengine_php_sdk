<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons
{
    public const CONVERT_UNDER_THRESHOLD_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons = 'CONVERT_UNDER_THRESHOLD';
    public const CONVERT_ZERO_OR_COST_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons = 'CONVERT_ZERO_OR_COST';
    public const CURRENCY_PRECISION_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons = 'CURRENCY_PRECISION';
    public const ROI_REAL_EXPECTED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons = 'ROI_REAL_EXPECTED';
    public const UN_OBERCOST_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons = 'UN_OBERCOST';

    public const ALLOWED_VALUES = [
        self::CONVERT_UNDER_THRESHOLD_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons,
        self::CONVERT_ZERO_OR_COST_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons,
        self::CURRENCY_PRECISION_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons,
        self::ROI_REAL_EXPECTED_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons,
        self::UN_OBERCOST_OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsCompensateHistoryListGetV30DataCompensateHistoryListCompensateEndReasons', $value));
        }
        return (string) $value;
    }
}
