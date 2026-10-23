<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30FilteringStatusSecond
{
    public const ECOSYSTEM_RISK_FAILED_UniProjectListGetV30FilteringStatusSecond = 'ECOSYSTEM_RISK_FAILED';
    public const PROJECT_STATUS_AUDIT_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_AUDIT';
    public const PROJECT_STATUS_AWEME_ACCOUNT_DISABLED_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_AWEME_ACCOUNT_DISABLED';
    public const PROJECT_STATUS_BUDGET_EXCEED_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_BUDGET_EXCEED';
    public const PROJECT_STATUS_NOT_START_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_NOT_START';
    public const PROJECT_STATUS_NO_SCHEDULE_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_NO_SCHEDULE';
    public const PROJECT_STATUS_OFFLINE_AUDIT_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_OFFLINE_AUDIT';
    public const PROJECT_STATUS_PRODUCT_OFFLINE_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_PRODUCT_OFFLINE';
    public const PROJECT_STATUS_REAUDIT_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_REAUDIT';
    public const PROJECT_STATUS_STOP_UniProjectListGetV30FilteringStatusSecond = 'PROJECT_STATUS_STOP';

    public const ALLOWED_VALUES = [
        self::ECOSYSTEM_RISK_FAILED_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_AUDIT_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_AWEME_ACCOUNT_DISABLED_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_BUDGET_EXCEED_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_NOT_START_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_NO_SCHEDULE_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_OFFLINE_AUDIT_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_PRODUCT_OFFLINE_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_REAUDIT_UniProjectListGetV30FilteringStatusSecond,
        self::PROJECT_STATUS_STOP_UniProjectListGetV30FilteringStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30FilteringStatusSecond', $value));
        }
        return (string) $value;
    }
}
