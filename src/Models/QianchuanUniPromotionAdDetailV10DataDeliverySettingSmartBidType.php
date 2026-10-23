<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType,
        self::SMART_BID_CUSTOM_QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataDeliverySettingSmartBidType', $value));
        }
        return (string) $value;
    }
}
