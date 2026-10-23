<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10DeliverySettingDeepBidType
{
    public const COMM_ROI_QianchuanAdCreateV10DeliverySettingDeepBidType = 'COMM_ROI';
    public const MIN_QianchuanAdCreateV10DeliverySettingDeepBidType = 'MIN';
    public const MIN_SECOND_STAGE_QianchuanAdCreateV10DeliverySettingDeepBidType = 'MIN_SECOND_STAGE';
    public const PACING_QianchuanAdCreateV10DeliverySettingDeepBidType = 'PACING';
    public const PAY_ROI_QianchuanAdCreateV10DeliverySettingDeepBidType = 'PAY_ROI';

    public const ALLOWED_VALUES = [
        self::COMM_ROI_QianchuanAdCreateV10DeliverySettingDeepBidType,
        self::MIN_QianchuanAdCreateV10DeliverySettingDeepBidType,
        self::MIN_SECOND_STAGE_QianchuanAdCreateV10DeliverySettingDeepBidType,
        self::PACING_QianchuanAdCreateV10DeliverySettingDeepBidType,
        self::PAY_ROI_QianchuanAdCreateV10DeliverySettingDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10DeliverySettingDeepBidType', $value));
        }
        return (string) $value;
    }
}
