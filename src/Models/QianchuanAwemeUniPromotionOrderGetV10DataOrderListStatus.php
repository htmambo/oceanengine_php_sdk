<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus
{
    public const AUDIT_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'AUDIT';
    public const BOOK_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'BOOK';
    public const CREATING_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'CREATING';
    public const DELIVERY_OK_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'DELIVERY_OK';
    public const FAILED_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'FAILED';
    public const FINISHED_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'FINISHED';
    public const FROZEN_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'FROZEN';
    public const OFFLINE_AUDIT_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'OFFLINE_AUDIT';
    public const OVER_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'OVER';
    public const TIMEOUT_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'TIMEOUT';
    public const UNPAID_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'UNPAID';
    public const UNPAIDCANCEL_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus = 'UNPAIDCANCEL';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::BOOK_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::CREATING_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::DELIVERY_OK_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::FAILED_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::FINISHED_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::FROZEN_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::OFFLINE_AUDIT_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::OVER_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::TIMEOUT_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::UNPAID_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
        self::UNPAIDCANCEL_QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderGetV10DataOrderListStatus', $value));
        }
        return (string) $value;
    }
}
