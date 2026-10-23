<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterOrderStatus
{
    public const COMPLETE_BrandOrderListV30FilterOrderStatus = 'COMPLETE';
    public const DELIVERING_BrandOrderListV30FilterOrderStatus = 'DELIVERING';
    public const EDITING_BrandOrderListV30FilterOrderStatus = 'EDITING';
    public const IS_DEL_BrandOrderListV30FilterOrderStatus = 'IS_DEL';
    public const NEW_ORDER_BrandOrderListV30FilterOrderStatus = 'NEW_ORDER';
    public const NOT_DELIVER_BrandOrderListV30FilterOrderStatus = 'NOT_DELIVER';
    public const PAUSE_BrandOrderListV30FilterOrderStatus = 'PAUSE';
    public const PRODUCT_NOT_AVAILABLE_BrandOrderListV30FilterOrderStatus = 'PRODUCT_NOT_AVAILABLE';
    public const RESUBMITTING_BrandOrderListV30FilterOrderStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandOrderListV30FilterOrderStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandOrderListV30FilterOrderStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandOrderListV30FilterOrderStatus = 'SUBMIT_FAILED';
    public const SUBMIT_SUCCESS_BrandOrderListV30FilterOrderStatus = 'SUBMIT_SUCCESS';
    public const UNKNOWN_BrandOrderListV30FilterOrderStatus = 'UNKNOWN';
    public const WAIT_DELETING_BrandOrderListV30FilterOrderStatus = 'WAIT_DELETING';

    public const ALLOWED_VALUES = [
        self::COMPLETE_BrandOrderListV30FilterOrderStatus,
        self::DELIVERING_BrandOrderListV30FilterOrderStatus,
        self::EDITING_BrandOrderListV30FilterOrderStatus,
        self::IS_DEL_BrandOrderListV30FilterOrderStatus,
        self::NEW_ORDER_BrandOrderListV30FilterOrderStatus,
        self::NOT_DELIVER_BrandOrderListV30FilterOrderStatus,
        self::PAUSE_BrandOrderListV30FilterOrderStatus,
        self::PRODUCT_NOT_AVAILABLE_BrandOrderListV30FilterOrderStatus,
        self::RESUBMITTING_BrandOrderListV30FilterOrderStatus,
        self::RESUBMIT_FAILED_BrandOrderListV30FilterOrderStatus,
        self::SUBMITTING_BrandOrderListV30FilterOrderStatus,
        self::SUBMIT_FAILED_BrandOrderListV30FilterOrderStatus,
        self::SUBMIT_SUCCESS_BrandOrderListV30FilterOrderStatus,
        self::UNKNOWN_BrandOrderListV30FilterOrderStatus,
        self::WAIT_DELETING_BrandOrderListV30FilterOrderStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterOrderStatus', $value));
        }
        return (string) $value;
    }
}
