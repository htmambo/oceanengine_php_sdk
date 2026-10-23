<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringStatus
{
    public const AD_STATUS_REAUDIT_ReportAdGetV2FilteringStatus = 'AD_STATUS_REAUDIT';
    public const AD_STATUS_ALL_ReportAdGetV2FilteringStatus = 'AD_STATUS_ALL';
    public const AD_STATUS_NO_SCHEDULE_ReportAdGetV2FilteringStatus = 'AD_STATUS_NO_SCHEDULE';
    public const AD_STATUS_DISABLE_ReportAdGetV2FilteringStatus = 'AD_STATUS_DISABLE';
    public const AD_STATUS_AUDIT_DENY_ReportAdGetV2FilteringStatus = 'AD_STATUS_AUDIT_DENY';
    public const AD_STATUS_CAMPAIGN_DISABLE_ReportAdGetV2FilteringStatus = 'AD_STATUS_CAMPAIGN_DISABLE';
    public const AD_STATUS_NOT_DELETE_ReportAdGetV2FilteringStatus = 'AD_STATUS_NOT_DELETE';
    public const AD_STATUS_NOT_START_ReportAdGetV2FilteringStatus = 'AD_STATUS_NOT_START';
    public const AD_STATUS_BUDGET_EXCEED_ReportAdGetV2FilteringStatus = 'AD_STATUS_BUDGET_EXCEED';
    public const AD_STATUS_DELIVERY_OK_ReportAdGetV2FilteringStatus = 'AD_STATUS_DELIVERY_OK';
    public const AD_STATUS_CREATE_ReportAdGetV2FilteringStatus = 'AD_STATUS_CREATE';
    public const AD_STATUS_BALANCE_EXCEED_ReportAdGetV2FilteringStatus = 'AD_STATUS_BALANCE_EXCEED';
    public const AD_STATUS_DELETE_ReportAdGetV2FilteringStatus = 'AD_STATUS_DELETE';
    public const AD_STATUS_AUDIT_ReportAdGetV2FilteringStatus = 'AD_STATUS_AUDIT';
    public const AD_STATUS_CAMPAIGN_EXCEED_ReportAdGetV2FilteringStatus = 'AD_STATUS_CAMPAIGN_EXCEED';
    public const AD_STATUS_DONE_ReportAdGetV2FilteringStatus = 'AD_STATUS_DONE';

    public const ALLOWED_VALUES = [
        self::AD_STATUS_REAUDIT_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_ALL_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_NO_SCHEDULE_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_DISABLE_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_AUDIT_DENY_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_CAMPAIGN_DISABLE_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_NOT_DELETE_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_NOT_START_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_BUDGET_EXCEED_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_DELIVERY_OK_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_CREATE_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_BALANCE_EXCEED_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_DELETE_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_AUDIT_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_CAMPAIGN_EXCEED_ReportAdGetV2FilteringStatus,
        self::AD_STATUS_DONE_ReportAdGetV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
