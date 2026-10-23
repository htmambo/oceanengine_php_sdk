<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdvertiserGetV10FilteringStatus
{
    public const ALL_INCLUDE_DELETED_QianchuanReportAdvertiserGetV10FilteringStatus = 'ALL_INCLUDE_DELETED';
    public const AUDIT_QianchuanReportAdvertiserGetV10FilteringStatus = 'AUDIT';
    public const DELETED_QianchuanReportAdvertiserGetV10FilteringStatus = 'DELETED';
    public const DELIVERY_OK_QianchuanReportAdvertiserGetV10FilteringStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanReportAdvertiserGetV10FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanReportAdvertiserGetV10FilteringStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanReportAdvertiserGetV10FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanReportAdvertiserGetV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanReportAdvertiserGetV10FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanReportAdvertiserGetV10FilteringStatus = 'OFFLINE_BUDGET';
    public const QUOTA_DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanReportAdvertiserGetV10FilteringStatus = 'REAUDIT';
    public const SYSTEM_DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanReportAdvertiserGetV10FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanReportAdvertiserGetV10FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ALL_INCLUDE_DELETED_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::AUDIT_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::DELETED_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::DELIVERY_OK_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::FROZEN_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::LIVE_ROOM_OFF_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::NO_SCHEDULE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::OFFLINE_BALANCE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::OFFLINE_BUDGET_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::QUOTA_DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::REAUDIT_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::SYSTEM_DISABLE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::TIME_DONE_QianchuanReportAdvertiserGetV10FilteringStatus,
        self::TIME_NO_REACH_QianchuanReportAdvertiserGetV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdvertiserGetV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
