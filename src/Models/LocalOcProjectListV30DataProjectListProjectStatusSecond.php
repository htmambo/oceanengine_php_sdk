<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListProjectStatusSecond
{
    public const AUDIT_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'AUDIT';
    public const AUDIT_DENY_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'AUDIT_DENY';
    public const AWEME_ACCOUNT_DISABLED_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'AWEME_ACCOUNT_DISABLED';
    public const BALANCE_OFFLINE_BUDGET_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'BALANCE_OFFLINE_BUDGET';
    public const DISABLED_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'DISABLED';
    public const DISABLE_BY_QUOTA_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'DISABLE_BY_QUOTA';
    public const LIVE_ROOM_OFF_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'OFFLINE_BALANCE';
    public const PRODUCT_OR_POI_OFFLINE_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'PRODUCT_OR_POI_OFFLINE';
    public const PROJECT_DISABLED_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'PROJECT_OFFLINE_BUDGET';
    public const PROMOTION_OFFLINE_BUDGET_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'PROMOTION_OFFLINE_BUDGET';
    public const REAUDIT_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'REAUDIT';
    public const ROI2_DISABLE_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'ROI2_DISABLE';
    public const TIME_NO_REACH_LocalOcProjectListV30DataProjectListProjectStatusSecond = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::AUDIT_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::AUDIT_DENY_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::AWEME_ACCOUNT_DISABLED_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::BALANCE_OFFLINE_BUDGET_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::DISABLED_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::DISABLE_BY_QUOTA_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::LIVE_ROOM_OFF_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::NO_SCHEDULE_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::OFFLINE_BALANCE_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::PRODUCT_OR_POI_OFFLINE_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::PROJECT_DISABLED_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::PROJECT_OFFLINE_BUDGET_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::PROMOTION_OFFLINE_BUDGET_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::REAUDIT_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::ROI2_DISABLE_LocalOcProjectListV30DataProjectListProjectStatusSecond,
        self::TIME_NO_REACH_LocalOcProjectListV30DataProjectListProjectStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListProjectStatusSecond', $value));
        }
        return (string) $value;
    }
}
