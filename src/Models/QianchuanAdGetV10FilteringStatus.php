<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10FilteringStatus
{
    public const ALL_QianchuanAdGetV10FilteringStatus = 'ALL';
    public const ALL_INCLUDE_DELETED_QianchuanAdGetV10FilteringStatus = 'ALL_INCLUDE_DELETED';
    public const AUDIT_QianchuanAdGetV10FilteringStatus = 'AUDIT';
    public const DELETED_QianchuanAdGetV10FilteringStatus = 'DELETED';
    public const DELIVERY_OK_QianchuanAdGetV10FilteringStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanAdGetV10FilteringStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_QianchuanAdGetV10FilteringStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanAdGetV10FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanAdGetV10FilteringStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanAdGetV10FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanAdGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanAdGetV10FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanAdGetV10FilteringStatus = 'OFFLINE_BUDGET';
    public const QUOTA_DISABLE_QianchuanAdGetV10FilteringStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanAdGetV10FilteringStatus = 'REAUDIT';
    public const ROI2_DISABLE_QianchuanAdGetV10FilteringStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanAdGetV10FilteringStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanAdGetV10FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanAdGetV10FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdGetV10FilteringStatus,
        self::ALL_INCLUDE_DELETED_QianchuanAdGetV10FilteringStatus,
        self::AUDIT_QianchuanAdGetV10FilteringStatus,
        self::DELETED_QianchuanAdGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanAdGetV10FilteringStatus,
        self::DISABLE_QianchuanAdGetV10FilteringStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanAdGetV10FilteringStatus,
        self::FROZEN_QianchuanAdGetV10FilteringStatus,
        self::LIVE_ROOM_OFF_QianchuanAdGetV10FilteringStatus,
        self::NO_SCHEDULE_QianchuanAdGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanAdGetV10FilteringStatus,
        self::OFFLINE_BALANCE_QianchuanAdGetV10FilteringStatus,
        self::OFFLINE_BUDGET_QianchuanAdGetV10FilteringStatus,
        self::QUOTA_DISABLE_QianchuanAdGetV10FilteringStatus,
        self::REAUDIT_QianchuanAdGetV10FilteringStatus,
        self::ROI2_DISABLE_QianchuanAdGetV10FilteringStatus,
        self::SYSTEM_DISABLE_QianchuanAdGetV10FilteringStatus,
        self::TIME_DONE_QianchuanAdGetV10FilteringStatus,
        self::TIME_NO_REACH_QianchuanAdGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
