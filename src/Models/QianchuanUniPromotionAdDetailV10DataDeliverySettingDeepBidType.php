<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType
{
    public const COMM_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType = 'COMM_ROI';
    public const MIN_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType = 'MIN';
    public const MIN_SECOND_STAGE_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType = 'MIN_SECOND_STAGE';
    public const PACING_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType = 'PACING';
    public const PAY_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType = 'PAY_ROI';

    public const ALLOWED_VALUES = [
        self::COMM_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType,
        self::MIN_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType,
        self::MIN_SECOND_STAGE_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType,
        self::PACING_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType,
        self::PAY_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepBidType', $value));
        }
        return (string) $value;
    }
}
