<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10DataListStatus
{
    public const AUDIT_QianchuanAwemeOrderGetV10DataListStatus = 'AUDIT';
    public const BOOK_QianchuanAwemeOrderGetV10DataListStatus = 'BOOK';
    public const CREATING_QianchuanAwemeOrderGetV10DataListStatus = 'CREATING';
    public const DELIVERY_OK_QianchuanAwemeOrderGetV10DataListStatus = 'DELIVERY_OK';
    public const FAILED_QianchuanAwemeOrderGetV10DataListStatus = 'FAILED';
    public const FINISHED_QianchuanAwemeOrderGetV10DataListStatus = 'FINISHED';
    public const FROZEN_QianchuanAwemeOrderGetV10DataListStatus = 'FROZEN';
    public const OFFLINE_AUDIT_QianchuanAwemeOrderGetV10DataListStatus = 'OFFLINE_AUDIT';
    public const OVER_QianchuanAwemeOrderGetV10DataListStatus = 'OVER';
    public const TIMEOUT_QianchuanAwemeOrderGetV10DataListStatus = 'TIMEOUT';
    public const UNPAID_QianchuanAwemeOrderGetV10DataListStatus = 'UNPAID';
    public const UNPAIDCANCEL_QianchuanAwemeOrderGetV10DataListStatus = 'UNPAIDCANCEL';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAwemeOrderGetV10DataListStatus,
        self::BOOK_QianchuanAwemeOrderGetV10DataListStatus,
        self::CREATING_QianchuanAwemeOrderGetV10DataListStatus,
        self::DELIVERY_OK_QianchuanAwemeOrderGetV10DataListStatus,
        self::FAILED_QianchuanAwemeOrderGetV10DataListStatus,
        self::FINISHED_QianchuanAwemeOrderGetV10DataListStatus,
        self::FROZEN_QianchuanAwemeOrderGetV10DataListStatus,
        self::OFFLINE_AUDIT_QianchuanAwemeOrderGetV10DataListStatus,
        self::OVER_QianchuanAwemeOrderGetV10DataListStatus,
        self::TIMEOUT_QianchuanAwemeOrderGetV10DataListStatus,
        self::UNPAID_QianchuanAwemeOrderGetV10DataListStatus,
        self::UNPAIDCANCEL_QianchuanAwemeOrderGetV10DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10DataListStatus', $value));
        }
        return (string) $value;
    }
}
