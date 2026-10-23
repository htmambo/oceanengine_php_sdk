<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanQianchuanVideoStarGetV10OrderField
{
    public const CREAT_TIME_QianchuanQianchuanVideoStarGetV10OrderField = 'creat_time';
    public const STAT_COST_QianchuanQianchuanVideoStarGetV10OrderField = 'stat_cost';
    public const CTR_QianchuanQianchuanVideoStarGetV10OrderField = 'ctr';
    public const CONVERT_RATE_QianchuanQianchuanVideoStarGetV10OrderField = 'convert_rate';
    public const TOTAL_PREPAY_AND_PAY_ORDER_ROI2_QianchuanQianchuanVideoStarGetV10OrderField = 'total_prepay_and_pay_order_roi2';
    public const TOTAL_PAY_ORDER_GMV_FOR_ROI2_QianchuanQianchuanVideoStarGetV10OrderField = 'total_pay_order_gmv_for_roi2';
    public const VIEW_CNT_QianchuanQianchuanVideoStarGetV10OrderField = 'view_cnt';
    public const LIKE_CNT_QianchuanQianchuanVideoStarGetV10OrderField = 'like_cnt';
    public const COMMENT_CNT_QianchuanQianchuanVideoStarGetV10OrderField = 'comment_cnt';
    public const SHARE_CNT_QianchuanQianchuanVideoStarGetV10OrderField = 'share_cnt';

    public const ALLOWED_VALUES = [
        self::CREAT_TIME_QianchuanQianchuanVideoStarGetV10OrderField,
        self::STAT_COST_QianchuanQianchuanVideoStarGetV10OrderField,
        self::CTR_QianchuanQianchuanVideoStarGetV10OrderField,
        self::CONVERT_RATE_QianchuanQianchuanVideoStarGetV10OrderField,
        self::TOTAL_PREPAY_AND_PAY_ORDER_ROI2_QianchuanQianchuanVideoStarGetV10OrderField,
        self::TOTAL_PAY_ORDER_GMV_FOR_ROI2_QianchuanQianchuanVideoStarGetV10OrderField,
        self::VIEW_CNT_QianchuanQianchuanVideoStarGetV10OrderField,
        self::LIKE_CNT_QianchuanQianchuanVideoStarGetV10OrderField,
        self::COMMENT_CNT_QianchuanQianchuanVideoStarGetV10OrderField,
        self::SHARE_CNT_QianchuanQianchuanVideoStarGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanQianchuanVideoStarGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
