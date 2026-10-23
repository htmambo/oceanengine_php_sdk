<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringStatusSecond
{
    public const ADVERTISER_AVATAR_OFFLINE_StdProjectListV30FilteringStatusSecond = 'ADVERTISER_AVATAR_OFFLINE';
    public const APP_NOT_AVAILABLE_FOR_DELIVERY_StdProjectListV30FilteringStatusSecond = 'APP_NOT_AVAILABLE_FOR_DELIVERY';
    public const ECOSYSTEM_RISK_FAILED_StdProjectListV30FilteringStatusSecond = 'ECOSYSTEM_RISK_FAILED';
    public const LACK_BASIC_MATERIAL_STATUS_StdProjectListV30FilteringStatusSecond = 'LACK_BASIC_MATERIAL_STATUS';
    public const LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY_StdProjectListV30FilteringStatusSecond = 'LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY';
    public const PROJECT_STATUS_AUDIT_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_AUDIT';
    public const PROJECT_STATUS_AWEME_ACCOUNT_DISABLED_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_AWEME_ACCOUNT_DISABLED';
    public const PROJECT_STATUS_BUDGET_EXCEED_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_BUDGET_EXCEED';
    public const PROJECT_STATUS_NOT_START_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_NOT_START';
    public const PROJECT_STATUS_NO_SCHEDULE_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_NO_SCHEDULE';
    public const PROJECT_STATUS_OFFLINE_AUDIT_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_OFFLINE_AUDIT';
    public const PROJECT_STATUS_PROCEDURAL_DISABLE_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_PROCEDURAL_DISABLE';
    public const PROJECT_STATUS_PRODUCT_OFFLINE_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_PRODUCT_OFFLINE';
    public const PROJECT_STATUS_REAUDIT_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_REAUDIT';
    public const PROJECT_STATUS_STOP_StdProjectListV30FilteringStatusSecond = 'PROJECT_STATUS_STOP';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_AVATAR_OFFLINE_StdProjectListV30FilteringStatusSecond,
        self::APP_NOT_AVAILABLE_FOR_DELIVERY_StdProjectListV30FilteringStatusSecond,
        self::ECOSYSTEM_RISK_FAILED_StdProjectListV30FilteringStatusSecond,
        self::LACK_BASIC_MATERIAL_STATUS_StdProjectListV30FilteringStatusSecond,
        self::LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_AUDIT_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_AWEME_ACCOUNT_DISABLED_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_BUDGET_EXCEED_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_NOT_START_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_NO_SCHEDULE_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_OFFLINE_AUDIT_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_PROCEDURAL_DISABLE_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_PRODUCT_OFFLINE_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_REAUDIT_StdProjectListV30FilteringStatusSecond,
        self::PROJECT_STATUS_STOP_StdProjectListV30FilteringStatusSecond,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringStatusSecond', $value));
        }
        return (string) $value;
    }
}
