<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataDeliverySettingDeepBidType
{
    public const COMM_ROI_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType = 'COMM_ROI';
    public const MIN_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType = 'MIN';
    public const MIN_SECOND_STAGE_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType = 'MIN_SECOND_STAGE';
    public const PACING_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType = 'PACING';
    public const PAY_ROI_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType = 'PAY_ROI';

    public const ALLOWED_VALUES = [
        self::COMM_ROI_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType,
        self::MIN_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType,
        self::MIN_SECOND_STAGE_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType,
        self::PACING_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType,
        self::PAY_ROI_QianchuanAdDetailGetV10DataDeliverySettingDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataDeliverySettingDeepBidType', $value));
        }
        return (string) $value;
    }
}
