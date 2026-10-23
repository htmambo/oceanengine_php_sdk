<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataStatus
{
    public const AUDIT_QianchuanAwemeOrderDetailGetV10DataStatus = 'AUDIT';
    public const BOOK_QianchuanAwemeOrderDetailGetV10DataStatus = 'BOOK';
    public const CREATING_QianchuanAwemeOrderDetailGetV10DataStatus = 'CREATING';
    public const DELIVERY_OK_QianchuanAwemeOrderDetailGetV10DataStatus = 'DELIVERY_OK';
    public const FAILED_QianchuanAwemeOrderDetailGetV10DataStatus = 'FAILED';
    public const FINISHED_QianchuanAwemeOrderDetailGetV10DataStatus = 'FINISHED';
    public const FROZEN_QianchuanAwemeOrderDetailGetV10DataStatus = 'FROZEN';
    public const OFFLINE_AUDIT_QianchuanAwemeOrderDetailGetV10DataStatus = 'OFFLINE_AUDIT';
    public const OVER_QianchuanAwemeOrderDetailGetV10DataStatus = 'OVER';
    public const TIMEOUT_QianchuanAwemeOrderDetailGetV10DataStatus = 'TIMEOUT';
    public const UNPAID_QianchuanAwemeOrderDetailGetV10DataStatus = 'UNPAID';
    public const UNPAIDCANCEL_QianchuanAwemeOrderDetailGetV10DataStatus = 'UNPAIDCANCEL';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::BOOK_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::CREATING_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::DELIVERY_OK_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::FAILED_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::FINISHED_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::FROZEN_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::OFFLINE_AUDIT_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::OVER_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::TIMEOUT_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::UNPAID_QianchuanAwemeOrderDetailGetV10DataStatus,
        self::UNPAIDCANCEL_QianchuanAwemeOrderDetailGetV10DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataStatus', $value));
        }
        return (string) $value;
    }
}
