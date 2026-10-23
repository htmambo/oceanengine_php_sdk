<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30DataPromotionListPromotionStatusSecond
{
    public const AUDIT_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'AUDIT';
    public const AUDIT_DENY_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'AUDIT_DENY';
    public const AWEME_ACCOUNT_DISABLED_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'AWEME_ACCOUNT_DISABLED';
    public const BALANCE_OFFLINE_BUDGET_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'BALANCE_OFFLINE_BUDGET';
    public const DISABLED_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'DISABLED';
    public const DISABLE_BY_QUOTA_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'DISABLE_BY_QUOTA';
    public const LIVE_ROOM_OFF_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'NO_SCHEDULE';
    public const OFFLINE_BALANCE_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'OFFLINE_BALANCE';
    public const PRODUCT_OR_POI_OFFLINE_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'PRODUCT_OR_POI_OFFLINE';
    public const PROJECT_DISABLED_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'PROJECT_DISABLED';
    public const PROJECT_OFFLINE_BUDGET_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'PROJECT_OFFLINE_BUDGET';
    public const PROMOTION_OFFLINE_BUDGET_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'PROMOTION_OFFLINE_BUDGET';
    public const REAUDIT_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'REAUDIT';
    public const ROI2_DISABLE_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'ROI2_DISABLE';
    public const TIME_NO_REACH_LocalPromotionListV30DataPromotionListPromotionStatusSecond = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::AUDIT_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::AUDIT_DENY_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::AWEME_ACCOUNT_DISABLED_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::BALANCE_OFFLINE_BUDGET_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::DISABLED_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::DISABLE_BY_QUOTA_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::LIVE_ROOM_OFF_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::NO_SCHEDULE_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::OFFLINE_BALANCE_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::PRODUCT_OR_POI_OFFLINE_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::PROJECT_DISABLED_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::PROJECT_OFFLINE_BUDGET_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::PROMOTION_OFFLINE_BUDGET_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::REAUDIT_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::ROI2_DISABLE_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
        self::TIME_NO_REACH_LocalPromotionListV30DataPromotionListPromotionStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30DataPromotionListPromotionStatusSecond', $value));
        }
        return (string) $value;
    }
}
