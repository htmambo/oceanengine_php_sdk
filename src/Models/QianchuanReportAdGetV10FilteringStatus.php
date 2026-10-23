<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdGetV10FilteringStatus
{
    public const ALL_INCLUDE_DELETED_QianchuanReportAdGetV10FilteringStatus = 'ALL_INCLUDE_DELETED';
    public const AUDIT_QianchuanReportAdGetV10FilteringStatus = 'AUDIT';
    public const DELETED_QianchuanReportAdGetV10FilteringStatus = 'DELETED';
    public const DELIVERY_OK_QianchuanReportAdGetV10FilteringStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanReportAdGetV10FilteringStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_QianchuanReportAdGetV10FilteringStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanReportAdGetV10FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanReportAdGetV10FilteringStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanReportAdGetV10FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanReportAdGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanReportAdGetV10FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanReportAdGetV10FilteringStatus = 'OFFLINE_BUDGET';
    public const QUOTA_DISABLE_QianchuanReportAdGetV10FilteringStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanReportAdGetV10FilteringStatus = 'REAUDIT';
    public const SYSTEM_DISABLE_QianchuanReportAdGetV10FilteringStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanReportAdGetV10FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanReportAdGetV10FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ALL_INCLUDE_DELETED_QianchuanReportAdGetV10FilteringStatus,
        self::AUDIT_QianchuanReportAdGetV10FilteringStatus,
        self::DELETED_QianchuanReportAdGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanReportAdGetV10FilteringStatus,
        self::DISABLE_QianchuanReportAdGetV10FilteringStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanReportAdGetV10FilteringStatus,
        self::FROZEN_QianchuanReportAdGetV10FilteringStatus,
        self::LIVE_ROOM_OFF_QianchuanReportAdGetV10FilteringStatus,
        self::NO_SCHEDULE_QianchuanReportAdGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanReportAdGetV10FilteringStatus,
        self::OFFLINE_BALANCE_QianchuanReportAdGetV10FilteringStatus,
        self::OFFLINE_BUDGET_QianchuanReportAdGetV10FilteringStatus,
        self::QUOTA_DISABLE_QianchuanReportAdGetV10FilteringStatus,
        self::REAUDIT_QianchuanReportAdGetV10FilteringStatus,
        self::SYSTEM_DISABLE_QianchuanReportAdGetV10FilteringStatus,
        self::TIME_DONE_QianchuanReportAdGetV10FilteringStatus,
        self::TIME_NO_REACH_QianchuanReportAdGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
