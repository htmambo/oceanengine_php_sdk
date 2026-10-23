<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanTodayLiveRoomFlowPerformanceGetV10FlowSource
{
    public const ALL_ECOM_FLOW_SOURCE_QianchuanTodayLiveRoomFlowPerformanceGetV10FlowSource = 'AllEcomFlowSource';
    public const ALL_ECOM_GMV_SOURCE_QianchuanTodayLiveRoomFlowPerformanceGetV10FlowSource = 'AllEcomGmvSource';

    public const ALLOWED_VALUES = [
        self::ALL_ECOM_FLOW_SOURCE_QianchuanTodayLiveRoomFlowPerformanceGetV10FlowSource,
        self::ALL_ECOM_GMV_SOURCE_QianchuanTodayLiveRoomFlowPerformanceGetV10FlowSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanTodayLiveRoomFlowPerformanceGetV10FlowSource', $value));
        }
        return (string) $value;
    }
}
