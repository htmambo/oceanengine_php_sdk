<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderDetailV10DataStatus
{
    public const AUDIT_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'AUDIT';
    public const BOOK_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'BOOK';
    public const CREATING_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'CREATING';
    public const DELIVERY_OK_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'DELIVERY_OK';
    public const FAILED_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'FAILED';
    public const FINISHED_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'FINISHED';
    public const FROZEN_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'FROZEN';
    public const OFFLINE_AUDIT_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'OFFLINE_AUDIT';
    public const OVER_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'OVER';
    public const TIMEOUT_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'TIMEOUT';
    public const UNPAID_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'UNPAID';
    public const UNPAIDCANCEL_QianchuanAwemeUniPromotionOrderDetailV10DataStatus = 'UNPAIDCANCEL';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::BOOK_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::CREATING_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::DELIVERY_OK_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::FAILED_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::FINISHED_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::FROZEN_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::OFFLINE_AUDIT_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::OVER_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::TIMEOUT_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::UNPAID_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
        self::UNPAIDCANCEL_QianchuanAwemeUniPromotionOrderDetailV10DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderDetailV10DataStatus', $value));
        }
        return (string) $value;
    }
}
