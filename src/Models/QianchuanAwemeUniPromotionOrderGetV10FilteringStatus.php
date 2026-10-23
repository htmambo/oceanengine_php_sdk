<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderGetV10FilteringStatus
{
    public const AUDIT_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'AUDIT';
    public const BOOK_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'BOOK';
    public const CREATING_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'CREATING';
    public const DELIVERY_OK_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'DELIVERY_OK';
    public const FAILED_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'FAILED';
    public const FINISHED_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'FINISHED';
    public const FROZEN_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'FROZEN';
    public const OFFLINE_AUDIT_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OVER_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'OVER';
    public const TIMEOUT_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'TIMEOUT';
    public const UNPAID_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'UNPAID';
    public const UNPAIDCANCEL_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus = 'UNPAIDCANCEL';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::BOOK_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::CREATING_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::FAILED_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::FINISHED_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::FROZEN_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::OVER_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::TIMEOUT_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::UNPAID_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
        self::UNPAIDCANCEL_QianchuanAwemeUniPromotionOrderGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
