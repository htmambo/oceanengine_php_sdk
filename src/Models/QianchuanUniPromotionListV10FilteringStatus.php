<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10FilteringStatus
{
    public const ADVERTISER_OFFLINE_BUDGET_QianchuanUniPromotionListV10FilteringStatus = 'ADVERTISER_OFFLINE_BUDGET';
    public const ALL_QianchuanUniPromotionListV10FilteringStatus = 'ALL';
    public const ALL_INCLUDE_DELETED_QianchuanUniPromotionListV10FilteringStatus = 'ALL_INCLUDE_DELETED';
    public const AUDIT_QianchuanUniPromotionListV10FilteringStatus = 'AUDIT';
    public const DELETED_QianchuanUniPromotionListV10FilteringStatus = 'DELETED';
    public const DELIVERY_OK_QianchuanUniPromotionListV10FilteringStatus = 'DELIVERY_OK';
    public const DISABLE_QianchuanUniPromotionListV10FilteringStatus = 'DISABLE';
    public const EXTERNAL_URL_DISABLE_QianchuanUniPromotionListV10FilteringStatus = 'EXTERNAL_URL_DISABLE';
    public const FROZEN_QianchuanUniPromotionListV10FilteringStatus = 'FROZEN';
    public const LIVE_ROOM_OFF_QianchuanUniPromotionListV10FilteringStatus = 'LIVE_ROOM_OFF';
    public const NO_SCHEDULE_QianchuanUniPromotionListV10FilteringStatus = 'NO_SCHEDULE';
    public const OFFLINE_AUDIT_QianchuanUniPromotionListV10FilteringStatus = 'OFFLINE_AUDIT';
    public const OFFLINE_BALANCE_QianchuanUniPromotionListV10FilteringStatus = 'OFFLINE_BALANCE';
    public const OFFLINE_BUDGET_QianchuanUniPromotionListV10FilteringStatus = 'OFFLINE_BUDGET';
    public const QUOTA_DISABLE_QianchuanUniPromotionListV10FilteringStatus = 'QUOTA_DISABLE';
    public const REAUDIT_QianchuanUniPromotionListV10FilteringStatus = 'REAUDIT';
    public const ROI2_DISABLE_QianchuanUniPromotionListV10FilteringStatus = 'ROI2_DISABLE';
    public const SYSTEM_DISABLE_QianchuanUniPromotionListV10FilteringStatus = 'SYSTEM_DISABLE';
    public const TIME_DONE_QianchuanUniPromotionListV10FilteringStatus = 'TIME_DONE';
    public const TIME_NO_REACH_QianchuanUniPromotionListV10FilteringStatus = 'TIME_NO_REACH';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_OFFLINE_BUDGET_QianchuanUniPromotionListV10FilteringStatus,
        self::ALL_QianchuanUniPromotionListV10FilteringStatus,
        self::ALL_INCLUDE_DELETED_QianchuanUniPromotionListV10FilteringStatus,
        self::AUDIT_QianchuanUniPromotionListV10FilteringStatus,
        self::DELETED_QianchuanUniPromotionListV10FilteringStatus,
        self::DELIVERY_OK_QianchuanUniPromotionListV10FilteringStatus,
        self::DISABLE_QianchuanUniPromotionListV10FilteringStatus,
        self::EXTERNAL_URL_DISABLE_QianchuanUniPromotionListV10FilteringStatus,
        self::FROZEN_QianchuanUniPromotionListV10FilteringStatus,
        self::LIVE_ROOM_OFF_QianchuanUniPromotionListV10FilteringStatus,
        self::NO_SCHEDULE_QianchuanUniPromotionListV10FilteringStatus,
        self::OFFLINE_AUDIT_QianchuanUniPromotionListV10FilteringStatus,
        self::OFFLINE_BALANCE_QianchuanUniPromotionListV10FilteringStatus,
        self::OFFLINE_BUDGET_QianchuanUniPromotionListV10FilteringStatus,
        self::QUOTA_DISABLE_QianchuanUniPromotionListV10FilteringStatus,
        self::REAUDIT_QianchuanUniPromotionListV10FilteringStatus,
        self::ROI2_DISABLE_QianchuanUniPromotionListV10FilteringStatus,
        self::SYSTEM_DISABLE_QianchuanUniPromotionListV10FilteringStatus,
        self::TIME_DONE_QianchuanUniPromotionListV10FilteringStatus,
        self::TIME_NO_REACH_QianchuanUniPromotionListV10FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10FilteringStatus', $value));
        }
        return (string) $value;
    }
}
