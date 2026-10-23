<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListDeliverySettingDeepBidType
{
    public const COMM_ROI_QianchuanAdGetV10DataListDeliverySettingDeepBidType = 'COMM_ROI';
    public const MIN_QianchuanAdGetV10DataListDeliverySettingDeepBidType = 'MIN';
    public const MIN_SECOND_STAGE_QianchuanAdGetV10DataListDeliverySettingDeepBidType = 'MIN_SECOND_STAGE';
    public const PACING_QianchuanAdGetV10DataListDeliverySettingDeepBidType = 'PACING';
    public const PAY_ROI_QianchuanAdGetV10DataListDeliverySettingDeepBidType = 'PAY_ROI';

    public const ALLOWED_VALUES = [
        self::COMM_ROI_QianchuanAdGetV10DataListDeliverySettingDeepBidType,
        self::MIN_QianchuanAdGetV10DataListDeliverySettingDeepBidType,
        self::MIN_SECOND_STAGE_QianchuanAdGetV10DataListDeliverySettingDeepBidType,
        self::PACING_QianchuanAdGetV10DataListDeliverySettingDeepBidType,
        self::PAY_ROI_QianchuanAdGetV10DataListDeliverySettingDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListDeliverySettingDeepBidType', $value));
        }
        return (string) $value;
    }
}
