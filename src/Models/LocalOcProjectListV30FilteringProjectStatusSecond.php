<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30FilteringProjectStatusSecond
{
    public const AUDIT_LocalOcProjectListV30FilteringProjectStatusSecond = 'AUDIT';
    public const AUDIT_DENY_LocalOcProjectListV30FilteringProjectStatusSecond = 'AUDIT_DENY';
    public const AWEME_ACCOUNT_DISABLED_LocalOcProjectListV30FilteringProjectStatusSecond = 'AWEME_ACCOUNT_DISABLED';
    public const BALANCE_OFFLINE_BUDGET_LocalOcProjectListV30FilteringProjectStatusSecond = 'BALANCE_OFFLINE_BUDGET';
    public const DISABLED_LocalOcProjectListV30FilteringProjectStatusSecond = 'DISABLED';
    public const DISABLE_BY_QUOTA_LocalOcProjectListV30FilteringProjectStatusSecond = 'DISABLE_BY_QUOTA';
    public const LIVE_ROOM_OFF_LocalOcProjectListV30FilteringProjectStatusSecond = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_LocalOcProjectListV30FilteringProjectStatusSecond = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_LocalOcProjectListV30FilteringProjectStatusSecond = 'OFFLINE_BALANCE';
    public const PRODUCT_OR_POI_OFFLINE_LocalOcProjectListV30FilteringProjectStatusSecond = 'PRODUCT_OR_POI_OFFLINE';
    public const PROJECT_DISABLED_LocalOcProjectListV30FilteringProjectStatusSecond = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_LocalOcProjectListV30FilteringProjectStatusSecond = 'PROJECT_OFFLINE_BUDGET';
    public const PROMOTION_OFFLINE_BUDGET_LocalOcProjectListV30FilteringProjectStatusSecond = 'PROMOTION_OFFLINE_BUDGET';
    public const REAUDIT_LocalOcProjectListV30FilteringProjectStatusSecond = 'REAUDIT';
    public const ROI2_DISABLE_LocalOcProjectListV30FilteringProjectStatusSecond = 'ROI2_DISABLE';
    public const TIME_NO_REACH_LocalOcProjectListV30FilteringProjectStatusSecond = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::AUDIT_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::AUDIT_DENY_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::AWEME_ACCOUNT_DISABLED_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::BALANCE_OFFLINE_BUDGET_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::DISABLED_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::DISABLE_BY_QUOTA_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::LIVE_ROOM_OFF_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::NO_SCHEDULE_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::OFFLINE_BALANCE_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::PRODUCT_OR_POI_OFFLINE_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::PROJECT_DISABLED_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::PROJECT_OFFLINE_BUDGET_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::PROMOTION_OFFLINE_BUDGET_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::REAUDIT_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::ROI2_DISABLE_LocalOcProjectListV30FilteringProjectStatusSecond,
        self::TIME_NO_REACH_LocalOcProjectListV30FilteringProjectStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30FilteringProjectStatusSecond', $value));
        }
        return (string) $value;
    }
}
