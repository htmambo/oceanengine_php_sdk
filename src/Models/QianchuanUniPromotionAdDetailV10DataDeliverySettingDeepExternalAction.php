<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_PAY_ROI';
    public const AD_CONVERT_TYPE_LIVE_PURE_PAY_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_PURE_PAY_ROI';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_PURE_PAY_ROI_QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataDeliverySettingDeepExternalAction', $value));
        }
        return (string) $value;
    }
}
