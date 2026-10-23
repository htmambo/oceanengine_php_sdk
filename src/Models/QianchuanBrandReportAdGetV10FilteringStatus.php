<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanBrandReportAdGetV10FilteringStatus
{
    public const ALL_INCLUDE_DELETED_QianchuanBrandReportAdGetV10FilteringStatus = 'ALL_INCLUDE_DELETED';
    public const AUDIT_QianchuanBrandReportAdGetV10FilteringStatus = 'AUDIT';
    public const DELETED_QianchuanBrandReportAdGetV10FilteringStatus = 'DELETED';
    public const DELIVERY_OK_QianchuanBrandReportAdGetV10FilteringStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanBrandReportAdGetV10FilteringStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_QianchuanBrandReportAdGetV10FilteringStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanBrandReportAdGetV10FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanBrandReportAdGetV10FilteringStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanBrandReportAdGetV10FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanBrandReportAdGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanBrandReportAdGetV10FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanBrandReportAdGetV10FilteringStatus = 'OFFLINE_BUDGET';
    public const QUOTA_DISABLE_QianchuanBrandReportAdGetV10FilteringStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanBrandReportAdGetV10FilteringStatus = 'REAUDIT';
    public const SYSTEM_DISABLE_QianchuanBrandReportAdGetV10FilteringStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanBrandReportAdGetV10FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanBrandReportAdGetV10FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ALL_INCLUDE_DELETED_QianchuanBrandReportAdGetV10FilteringStatus,
        self::AUDIT_QianchuanBrandReportAdGetV10FilteringStatus,
        self::DELETED_QianchuanBrandReportAdGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanBrandReportAdGetV10FilteringStatus,
        self::DISABLE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::FROZEN_QianchuanBrandReportAdGetV10FilteringStatus,
        self::LIVE_ROOM_OFF_QianchuanBrandReportAdGetV10FilteringStatus,
        self::NO_SCHEDULE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanBrandReportAdGetV10FilteringStatus,
        self::OFFLINE_BALANCE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::OFFLINE_BUDGET_QianchuanBrandReportAdGetV10FilteringStatus,
        self::QUOTA_DISABLE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::REAUDIT_QianchuanBrandReportAdGetV10FilteringStatus,
        self::SYSTEM_DISABLE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::TIME_DONE_QianchuanBrandReportAdGetV10FilteringStatus,
        self::TIME_NO_REACH_QianchuanBrandReportAdGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanBrandReportAdGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
