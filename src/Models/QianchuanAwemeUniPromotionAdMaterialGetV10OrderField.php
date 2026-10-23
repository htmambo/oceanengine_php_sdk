<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10OrderField
{
    public const STAT_COST_FOR_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField = 'stat_cost_for_roi2';
    public const TOTAL_ORDER_SETTLE_AMOUNT_FOR_ROI2_1H_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField = 'total_order_settle_amount_for_roi2_1h';
    public const TOTAL_PAY_ORDER_COUNT_FOR_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField = 'total_pay_order_count_for_roi2';
    public const TOTAL_PAY_ORDER_GMV_INCLUDE_COUPON_FOR_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField = 'total_pay_order_gmv_include_coupon_for_roi2';
    public const TOTAL_PREPAY_AND_PAY_ORDER_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField = 'total_prepay_and_pay_order_roi2';
    public const TOTAL_PREPAY_AND_PAY_SETTLE_ROI2_1H_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField = 'total_prepay_and_pay_settle_roi2_1h';

    public const ALLOWED_VALUES = [
        self::STAT_COST_FOR_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField,
        self::TOTAL_ORDER_SETTLE_AMOUNT_FOR_ROI2_1H_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField,
        self::TOTAL_PAY_ORDER_COUNT_FOR_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField,
        self::TOTAL_PAY_ORDER_GMV_INCLUDE_COUPON_FOR_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField,
        self::TOTAL_PREPAY_AND_PAY_ORDER_ROI2_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField,
        self::TOTAL_PREPAY_AND_PAY_SETTLE_ROI2_1H_QianchuanAwemeUniPromotionAdMaterialGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
