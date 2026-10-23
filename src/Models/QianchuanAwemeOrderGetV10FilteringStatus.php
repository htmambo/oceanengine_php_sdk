<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10FilteringStatus
{
    public const AUDIT_QianchuanAwemeOrderGetV10FilteringStatus = 'AUDIT';
    public const BOOK_QianchuanAwemeOrderGetV10FilteringStatus = 'BOOK';
    public const CREATING_QianchuanAwemeOrderGetV10FilteringStatus = 'CREATING';
    public const DELIVERY_OK_QianchuanAwemeOrderGetV10FilteringStatus = 'DELIVERY_OK';
    public const FAILED_QianchuanAwemeOrderGetV10FilteringStatus = 'FAILED';
    public const FINISHED_QianchuanAwemeOrderGetV10FilteringStatus = 'FINISHED';
    public const FROZEN_QianchuanAwemeOrderGetV10FilteringStatus = 'FROZEN';
    public const OFFLINE_AUDIT_QianchuanAwemeOrderGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OVER_QianchuanAwemeOrderGetV10FilteringStatus = 'OVER';
    public const TIMEOUT_QianchuanAwemeOrderGetV10FilteringStatus = 'TIMEOUT';
    public const UNPAID_QianchuanAwemeOrderGetV10FilteringStatus = 'UNPAID';
    public const UNPAIDCANCEL_QianchuanAwemeOrderGetV10FilteringStatus = 'UNPAIDCANCEL';

    public const ALLOWED_VALUES = [
        self::AUDIT_QianchuanAwemeOrderGetV10FilteringStatus,
        self::BOOK_QianchuanAwemeOrderGetV10FilteringStatus,
        self::CREATING_QianchuanAwemeOrderGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanAwemeOrderGetV10FilteringStatus,
        self::FAILED_QianchuanAwemeOrderGetV10FilteringStatus,
        self::FINISHED_QianchuanAwemeOrderGetV10FilteringStatus,
        self::FROZEN_QianchuanAwemeOrderGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanAwemeOrderGetV10FilteringStatus,
        self::OVER_QianchuanAwemeOrderGetV10FilteringStatus,
        self::TIMEOUT_QianchuanAwemeOrderGetV10FilteringStatus,
        self::UNPAID_QianchuanAwemeOrderGetV10FilteringStatus,
        self::UNPAIDCANCEL_QianchuanAwemeOrderGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
