<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType
{
    public const AUTO_BID_QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType = 'AUTO_BID';
    public const MANUAL_BID_QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType = 'MANUAL_BID';

    public const ALLOWED_VALUES = [
        self::AUTO_BID_QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType,
        self::MANUAL_BID_QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderDetailV10DataDeliverySettingBidType', $value));
        }
        return (string) $value;
    }
}
