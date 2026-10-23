<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCarouselAwemeGetV10OrderField
{
    public const CREATE_ORDER_AMOUNT_QianchuanCarouselAwemeGetV10OrderField = 'create_order_amount';
    public const CREATE_TIME_QianchuanCarouselAwemeGetV10OrderField = 'create_time';
    public const CTR_QianchuanCarouselAwemeGetV10OrderField = 'ctr';
    public const DY_COMMENT_QianchuanCarouselAwemeGetV10OrderField = 'dy_comment';
    public const DY_LIKE_QianchuanCarouselAwemeGetV10OrderField = 'dy_like';
    public const DY_SHARE_QianchuanCarouselAwemeGetV10OrderField = 'dy_share';
    public const ECP_CONVERT_RATE_QianchuanCarouselAwemeGetV10OrderField = 'ecp_convert_rate';
    public const ECP_CPA_PLATFORM_QianchuanCarouselAwemeGetV10OrderField = 'ecp_cpa_platform';
    public const PREPAY_AND_PAY_ORDER_ROI_QianchuanCarouselAwemeGetV10OrderField = 'prepay_and_pay_order_roi';
    public const STAT_COST_QianchuanCarouselAwemeGetV10OrderField = 'stat_cost';

    public const ALLOWED_VALUES = [
        self::CREATE_ORDER_AMOUNT_QianchuanCarouselAwemeGetV10OrderField,
        self::CREATE_TIME_QianchuanCarouselAwemeGetV10OrderField,
        self::CTR_QianchuanCarouselAwemeGetV10OrderField,
        self::DY_COMMENT_QianchuanCarouselAwemeGetV10OrderField,
        self::DY_LIKE_QianchuanCarouselAwemeGetV10OrderField,
        self::DY_SHARE_QianchuanCarouselAwemeGetV10OrderField,
        self::ECP_CONVERT_RATE_QianchuanCarouselAwemeGetV10OrderField,
        self::ECP_CPA_PLATFORM_QianchuanCarouselAwemeGetV10OrderField,
        self::PREPAY_AND_PAY_ORDER_ROI_QianchuanCarouselAwemeGetV10OrderField,
        self::STAT_COST_QianchuanCarouselAwemeGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCarouselAwemeGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
