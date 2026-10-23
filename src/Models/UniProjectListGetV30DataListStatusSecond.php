<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListStatusSecond
{
    public const ADVERTISER_AVATAR_OFFLINE_UniProjectListGetV30DataListStatusSecond = 'ADVERTISER_AVATAR_OFFLINE';
    public const PROJECT_STATUS_ADV_OFFLINE_BUDGET_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_ADV_OFFLINE_BUDGET';
    public const PROJECT_STATUS_AUDIT_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_AUDIT';
    public const PROJECT_STATUS_AWEME_ACCOUNT_DISABLED_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_AWEME_ACCOUNT_DISABLED';
    public const PROJECT_STATUS_BUDGET_EXCEED_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_BUDGET_EXCEED';
    public const PROJECT_STATUS_NOT_START_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_NOT_START';
    public const PROJECT_STATUS_NO_SCHEDULE_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_NO_SCHEDULE';
    public const PROJECT_STATUS_OFFLINE_AUDIT_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_OFFLINE_AUDIT';
    public const PROJECT_STATUS_OFFLINE_BUDGET_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_OFFLINE_BUDGET';
    public const PROJECT_STATUS_PRODUCT_OFFLINE_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_PRODUCT_OFFLINE';
    public const PROJECT_STATUS_REACH_DAILY_DELIVERY_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_REACH_DAILY_DELIVERY';
    public const PROJECT_STATUS_REAUDIT_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_REAUDIT';
    public const PROJECT_STATUS_STOP_UniProjectListGetV30DataListStatusSecond = 'PROJECT_STATUS_STOP';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_AVATAR_OFFLINE_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_ADV_OFFLINE_BUDGET_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_AUDIT_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_AWEME_ACCOUNT_DISABLED_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_BUDGET_EXCEED_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_NOT_START_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_NO_SCHEDULE_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_OFFLINE_AUDIT_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_OFFLINE_BUDGET_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_PRODUCT_OFFLINE_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_REACH_DAILY_DELIVERY_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_REAUDIT_UniProjectListGetV30DataListStatusSecond,
        self::PROJECT_STATUS_STOP_UniProjectListGetV30DataListStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListStatusSecond', $value));
        }
        return (string) $value;
    }
}
