<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanBrandReportAdvertiserGetV10FilteringStatus
{
    public const ALL_INCLUDE_DELETED_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'ALL_INCLUDE_DELETED';
    public const AUDIT_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'AUDIT';
    public const DELETED_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'DELETED';
    public const DELIVERY_OK_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'OFFLINE_BUDGET';
    public const QUOTA_DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'REAUDIT';
    public const SYSTEM_DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanBrandReportAdvertiserGetV10FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ALL_INCLUDE_DELETED_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::AUDIT_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::DELETED_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::FROZEN_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::LIVE_ROOM_OFF_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::NO_SCHEDULE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::OFFLINE_BALANCE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::OFFLINE_BUDGET_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::QUOTA_DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::REAUDIT_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::SYSTEM_DISABLE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::TIME_DONE_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
        self::TIME_NO_REACH_QianchuanBrandReportAdvertiserGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanBrandReportAdvertiserGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
