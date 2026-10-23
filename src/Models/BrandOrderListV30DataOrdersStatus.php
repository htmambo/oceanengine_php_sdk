<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersStatus
{
    public const COMPLETE_BrandOrderListV30DataOrdersStatus = 'COMPLETE';
    public const DELIVERING_BrandOrderListV30DataOrdersStatus = 'DELIVERING';
    public const EDITING_BrandOrderListV30DataOrdersStatus = 'EDITING';
    public const IS_DEL_BrandOrderListV30DataOrdersStatus = 'IS_DEL';
    public const NEW_ORDER_BrandOrderListV30DataOrdersStatus = 'NEW_ORDER';
    public const NOT_DELIVER_BrandOrderListV30DataOrdersStatus = 'NOT_DELIVER';
    public const PAUSE_BrandOrderListV30DataOrdersStatus = 'PAUSE';
    public const PRODUCT_NOT_AVAILABLE_BrandOrderListV30DataOrdersStatus = 'PRODUCT_NOT_AVAILABLE';
    public const RESUBMITTING_BrandOrderListV30DataOrdersStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandOrderListV30DataOrdersStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandOrderListV30DataOrdersStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandOrderListV30DataOrdersStatus = 'SUBMIT_FAILED';
    public const SUBMIT_SUCCESS_BrandOrderListV30DataOrdersStatus = 'SUBMIT_SUCCESS';
    public const UNKNOWN_BrandOrderListV30DataOrdersStatus = 'UNKNOWN';
    public const WAIT_DELETING_BrandOrderListV30DataOrdersStatus = 'WAIT_DELETING';

    public const ALLOWED_VALUES = [
        self::COMPLETE_BrandOrderListV30DataOrdersStatus,
        self::DELIVERING_BrandOrderListV30DataOrdersStatus,
        self::EDITING_BrandOrderListV30DataOrdersStatus,
        self::IS_DEL_BrandOrderListV30DataOrdersStatus,
        self::NEW_ORDER_BrandOrderListV30DataOrdersStatus,
        self::NOT_DELIVER_BrandOrderListV30DataOrdersStatus,
        self::PAUSE_BrandOrderListV30DataOrdersStatus,
        self::PRODUCT_NOT_AVAILABLE_BrandOrderListV30DataOrdersStatus,
        self::RESUBMITTING_BrandOrderListV30DataOrdersStatus,
        self::RESUBMIT_FAILED_BrandOrderListV30DataOrdersStatus,
        self::SUBMITTING_BrandOrderListV30DataOrdersStatus,
        self::SUBMIT_FAILED_BrandOrderListV30DataOrdersStatus,
        self::SUBMIT_SUCCESS_BrandOrderListV30DataOrdersStatus,
        self::UNKNOWN_BrandOrderListV30DataOrdersStatus,
        self::WAIT_DELETING_BrandOrderListV30DataOrdersStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersStatus', $value));
        }
        return (string) $value;
    }
}
