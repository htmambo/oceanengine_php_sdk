<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10OrderField
{
    public const ORDER_CREATE_TIME_QianchuanAwemeOrderGetV10OrderField = 'order_create_time';
    public const PAY_ORDER_AMOUNT_QianchuanAwemeOrderGetV10OrderField = 'pay_order_amount';
    public const PREPAY_AND_PAY_ORDER_ROI_QianchuanAwemeOrderGetV10OrderField = 'prepay_and_pay_order_roi';
    public const STAT_COST_QianchuanAwemeOrderGetV10OrderField = 'stat_cost';

    public const ALLOWED_VALUES = [
        self::ORDER_CREATE_TIME_QianchuanAwemeOrderGetV10OrderField,
        self::PAY_ORDER_AMOUNT_QianchuanAwemeOrderGetV10OrderField,
        self::PREPAY_AND_PAY_ORDER_ROI_QianchuanAwemeOrderGetV10OrderField,
        self::STAT_COST_QianchuanAwemeOrderGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
