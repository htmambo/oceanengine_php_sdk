<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListSecondStatus
{
    public const ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsAudienceListV30DataListSecondStatus = 'ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY';
    public const ADJUST_DELETED_OcProjectToolsAudienceListV30DataListSecondStatus = 'ADJUST_DELETED';
    public const ADJUST_TERMINATED_OcProjectToolsAudienceListV30DataListSecondStatus = 'ADJUST_TERMINATED';
    public const APP_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsAudienceListV30DataListSecondStatus = 'APP_NOT_AVAILABLE_FOR_DELIVERY';
    public const DISABLE_OcProjectToolsAudienceListV30DataListSecondStatus = 'DISABLE';
    public const LACK_BASIC_MATERIAL_STATUS_OcProjectToolsAudienceListV30DataListSecondStatus = 'LACK_BASIC_MATERIAL_STATUS';
    public const LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsAudienceListV30DataListSecondStatus = 'LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY';
    public const MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE';
    public const MATERIAL_STATUS_NO_SCHEDULE_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_NO_SCHEDULE';
    public const MATERIAL_STATUS_OFFLINE_BALANCE_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_OFFLINE_BALANCE';
    public const MATERIAL_STATUS_OFFLINE_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_OFFLINE_BUDGET';
    public const MATERIAL_STATUS_PRODUCT_OFFLINE_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_PRODUCT_OFFLINE';
    public const MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET';
    public const MATERIAL_STATUS_TIME_NO_REACH_OcProjectToolsAudienceListV30DataListSecondStatus = 'MATERIAL_STATUS_TIME_NO_REACH';
    public const PROJECT_AUDIENCE_SETTING_CONFLICT_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_AUDIENCE_SETTING_CONFLICT';
    public const PROJECT_AUDIT_REJECTED_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_AUDIT_REJECTED';
    public const PROJECT_COMPLETED_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_COMPLETED';
    public const PROJECT_DELETED_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_DELETED';
    public const PROJECT_PAUSED_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_PAUSED';
    public const PROJECT_REACHED_DELIVERY_DURATION_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_REACHED_DELIVERY_DURATION';
    public const PROJECT_STATUS_AUDIT_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_STATUS_AUDIT';
    public const PROJECT_STATUS_REAUDIT_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_STATUS_REAUDIT';
    public const PROJECT_TERMINATED_OcProjectToolsAudienceListV30DataListSecondStatus = 'PROJECT_TERMINATED';
    public const SHARED_WALLET_EXCEEDS_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus = 'SHARED_WALLET_EXCEEDS_BUDGET';
    public const TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus = 'TASK_BID_EXCEEDS_PROJECT_BUDGET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::ADJUST_DELETED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::ADJUST_TERMINATED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::APP_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::DISABLE_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::LACK_BASIC_MATERIAL_STATUS_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_NO_SCHEDULE_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_OFFLINE_BALANCE_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_OFFLINE_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_PRODUCT_OFFLINE_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::MATERIAL_STATUS_TIME_NO_REACH_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_AUDIENCE_SETTING_CONFLICT_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_AUDIT_REJECTED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_COMPLETED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_DELETED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_PAUSED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_REACHED_DELIVERY_DURATION_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_STATUS_AUDIT_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_STATUS_REAUDIT_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::PROJECT_TERMINATED_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::SHARED_WALLET_EXCEEDS_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus,
        self::TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsAudienceListV30DataListSecondStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListSecondStatus', $value));
        }
        return (string) $value;
    }
}
