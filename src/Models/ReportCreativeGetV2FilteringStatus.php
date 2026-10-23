<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringStatus
{
    public const CREATIVE_STATUS_AD_AUDIT_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_AD_AUDIT';
    public const CREATIVE_STATUS_AD_REAUDIT_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_AD_REAUDIT';
    public const CREATIVE_STATUS_AD_DISABLE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_AD_DISABLE';
    public const CREATIVE_STATUS_DISABLE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_DISABLE';
    public const CREATIVE_STATUS_REAUDIT_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_REAUDIT';
    public const CREATIVE_STATUS_DONE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_DONE';
    public const CREATIVE_STATUS_NO_SCHEDULE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_NO_SCHEDULE';
    public const CREATIVE_STATUS_NOT_START_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_NOT_START';
    public const CREATIVE_STATUS_AD_AUDIT_DENY_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_AD_AUDIT_DENY';
    public const CREATIVE_STATUS_CAMPAIGN_DISABLE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_CAMPAIGN_DISABLE';
    public const CREATIVE_STATUS_BUDGET_EXCEED_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_BUDGET_EXCEED';
    public const CREATIVE_STATUS_BALANCE_EXCEED_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_BALANCE_EXCEED';
    public const CREATIVE_STATUS_DELETE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_DELETE';
    public const CREATIVE_STATUS_DELIVERY_OK_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_DELIVERY_OK';
    public const CREATIVE_STATUS_CAMPAIGN_EXCEED_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_CAMPAIGN_EXCEED';
    public const CREATIVE_STATUS_NOT_DELETE_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_NOT_DELETE';
    public const CREATIVE_STATUS_AUDIT_DENY_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_AUDIT_DENY';
    public const CREATIVE_STATUS_ALL_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_ALL';
    public const CREATIVE_STATUS_AUDIT_ReportCreativeGetV2FilteringStatus = 'CREATIVE_STATUS_AUDIT';

    public const ALLOWED_VALUES = [
        self::CREATIVE_STATUS_AD_AUDIT_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_AD_REAUDIT_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_AD_DISABLE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_DISABLE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_REAUDIT_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_DONE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_NO_SCHEDULE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_NOT_START_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_AD_AUDIT_DENY_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_CAMPAIGN_DISABLE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_BUDGET_EXCEED_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_BALANCE_EXCEED_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_DELETE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_DELIVERY_OK_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_CAMPAIGN_EXCEED_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_NOT_DELETE_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_AUDIT_DENY_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_ALL_ReportCreativeGetV2FilteringStatus,
        self::CREATIVE_STATUS_AUDIT_ReportCreativeGetV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
