<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringPromotionStatusSecond
{
    public const AUDIT_LocalPromotionListV30FilteringPromotionStatusSecond = 'AUDIT';
    public const AUDIT_DENY_LocalPromotionListV30FilteringPromotionStatusSecond = 'AUDIT_DENY';
    public const AWEME_ACCOUNT_DISABLED_LocalPromotionListV30FilteringPromotionStatusSecond = 'AWEME_ACCOUNT_DISABLED';
    public const BALANCE_OFFLINE_BUDGET_LocalPromotionListV30FilteringPromotionStatusSecond = 'BALANCE_OFFLINE_BUDGET';
    public const DISABLED_LocalPromotionListV30FilteringPromotionStatusSecond = 'DISABLED';
    public const DISABLE_BY_QUOTA_LocalPromotionListV30FilteringPromotionStatusSecond = 'DISABLE_BY_QUOTA';
    public const LIVE_ROOM_OFF_LocalPromotionListV30FilteringPromotionStatusSecond = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_LocalPromotionListV30FilteringPromotionStatusSecond = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_LocalPromotionListV30FilteringPromotionStatusSecond = 'OFFLINE_BALANCE';
    public const PRODUCT_OR_POI_OFFLINE_LocalPromotionListV30FilteringPromotionStatusSecond = 'PRODUCT_OR_POI_OFFLINE';
    public const PROJECT_DISABLED_LocalPromotionListV30FilteringPromotionStatusSecond = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_LocalPromotionListV30FilteringPromotionStatusSecond = 'PROJECT_OFFLINE_BUDGET';
    public const PROMOTION_OFFLINE_BUDGET_LocalPromotionListV30FilteringPromotionStatusSecond = 'PROMOTION_OFFLINE_BUDGET';
    public const REAUDIT_LocalPromotionListV30FilteringPromotionStatusSecond = 'REAUDIT';
    public const ROI2_DISABLE_LocalPromotionListV30FilteringPromotionStatusSecond = 'ROI2_DISABLE';
    public const TIME_NO_REACH_LocalPromotionListV30FilteringPromotionStatusSecond = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::AUDIT_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::AUDIT_DENY_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::AWEME_ACCOUNT_DISABLED_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::BALANCE_OFFLINE_BUDGET_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::DISABLED_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::DISABLE_BY_QUOTA_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::LIVE_ROOM_OFF_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::NO_SCHEDULE_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::OFFLINE_BALANCE_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::PRODUCT_OR_POI_OFFLINE_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::PROJECT_DISABLED_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::PROJECT_OFFLINE_BUDGET_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::PROMOTION_OFFLINE_BUDGET_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::REAUDIT_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::ROI2_DISABLE_LocalPromotionListV30FilteringPromotionStatusSecond,
        self::TIME_NO_REACH_LocalPromotionListV30FilteringPromotionStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringPromotionStatusSecond', $value));
        }
        return (string) $value;
    }
}
