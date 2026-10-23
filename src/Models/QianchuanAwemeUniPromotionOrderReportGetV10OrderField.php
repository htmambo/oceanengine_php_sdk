<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderReportGetV10OrderField
{
    public const TOTAL_PAY_ORDER_GMV_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_pay_order_gmv_for_roi2';
    public const STAT_COST_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'stat_cost_for_roi2';
    public const TOTAL_PREPAY_AND_PAY_ORDER_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_prepay_and_pay_order_roi2';
    public const TOTAL_PAY_ORDER_COUNT_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_pay_order_count_for_roi2';
    public const TOTAL_PAY_ORDER_COUPON_AMOUNT_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_pay_order_coupon_amount_for_roi2';
    public const TOTAL_UNFINISHED_ESTIMATE_ORDER_GMV_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_unfinished_estimate_order_gmv_for_roi2';
    public const TOTAL_ECOM_PLATFORM_SUBSIDY_AMOUNT_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_ecom_platform_subsidy_amount_for_roi2';
    public const TOTAL_PAY_ORDER_GMV_INCLUDE_COUPON_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_pay_order_gmv_include_coupon_for_roi2';
    public const TOTAL_PREPAY_AND_PAY_SETTLE_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_prepay_and_pay_settle_roi2_1h';
    public const TOTAL_ORDER_SETTLE_AMOUNT_FOR_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_order_settle_amount_for_roi2_1h';
    public const TOTAL_ORDER_SETTLE_COUNT_FOR_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_order_settle_count_for_roi2_1h';
    public const TOTAL_COST_PER_PAY_ORDER_SETTLE_FOR_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField = 'total_cost_per_pay_order_settle_for_roi2_1h';

    public const ALLOWED_VALUES = [
        self::TOTAL_PAY_ORDER_GMV_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::STAT_COST_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_PREPAY_AND_PAY_ORDER_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_PAY_ORDER_COUNT_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_PAY_ORDER_COUPON_AMOUNT_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_UNFINISHED_ESTIMATE_ORDER_GMV_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_ECOM_PLATFORM_SUBSIDY_AMOUNT_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_PAY_ORDER_GMV_INCLUDE_COUPON_FOR_ROI2_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_PREPAY_AND_PAY_SETTLE_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_ORDER_SETTLE_AMOUNT_FOR_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_ORDER_SETTLE_COUNT_FOR_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
        self::TOTAL_COST_PER_PAY_ORDER_SETTLE_FOR_ROI2_1H_QianchuanAwemeUniPromotionOrderReportGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderReportGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
