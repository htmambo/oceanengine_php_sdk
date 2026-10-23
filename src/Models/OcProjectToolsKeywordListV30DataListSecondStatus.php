<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsKeywordListV30DataListSecondStatus
{
    public const ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsKeywordListV30DataListSecondStatus = 'ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY';
    public const ADJUST_DELETED_OcProjectToolsKeywordListV30DataListSecondStatus = 'ADJUST_DELETED';
    public const ADJUST_TERMINATED_OcProjectToolsKeywordListV30DataListSecondStatus = 'ADJUST_TERMINATED';
    public const ALL_KEYWORD_DELETED_OcProjectToolsKeywordListV30DataListSecondStatus = 'ALL_KEYWORD_DELETED';
    public const APP_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsKeywordListV30DataListSecondStatus = 'APP_NOT_AVAILABLE_FOR_DELIVERY';
    public const DISABLE_OcProjectToolsKeywordListV30DataListSecondStatus = 'DISABLE';
    public const KEYWORD_ADJUST_AUDITING_OcProjectToolsKeywordListV30DataListSecondStatus = 'KEYWORD_ADJUST_AUDITING';
    public const KEYWORD_ADJUST_NEW_CREATED_AUDITING_OcProjectToolsKeywordListV30DataListSecondStatus = 'KEYWORD_ADJUST_NEW_CREATED_AUDITING';
    public const LACK_BASIC_MATERIAL_STATUS_OcProjectToolsKeywordListV30DataListSecondStatus = 'LACK_BASIC_MATERIAL_STATUS';
    public const LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsKeywordListV30DataListSecondStatus = 'LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY';
    public const MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE';
    public const MATERIAL_STATUS_NO_SCHEDULE_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_NO_SCHEDULE';
    public const MATERIAL_STATUS_OFFLINE_BALANCE_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_OFFLINE_BALANCE';
    public const MATERIAL_STATUS_OFFLINE_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_OFFLINE_BUDGET';
    public const MATERIAL_STATUS_PRODUCT_OFFLINE_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_PRODUCT_OFFLINE';
    public const MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET';
    public const MATERIAL_STATUS_TIME_NO_REACH_OcProjectToolsKeywordListV30DataListSecondStatus = 'MATERIAL_STATUS_TIME_NO_REACH';
    public const PROJECT_AUDIT_REJECTED_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_AUDIT_REJECTED';
    public const PROJECT_COMPLETED_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_COMPLETED';
    public const PROJECT_DELETED_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_DELETED';
    public const PROJECT_PAUSED_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_PAUSED';
    public const PROJECT_REACHED_DELIVERY_DURATION_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_REACHED_DELIVERY_DURATION';
    public const PROJECT_STATUS_AUDIT_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_STATUS_AUDIT';
    public const PROJECT_STATUS_REAUDIT_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_STATUS_REAUDIT';
    public const PROJECT_TERMINATED_OcProjectToolsKeywordListV30DataListSecondStatus = 'PROJECT_TERMINATED';
    public const SHARED_WALLET_EXCEEDS_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus = 'SHARED_WALLET_EXCEEDS_BUDGET';
    public const TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus = 'TASK_BID_EXCEEDS_PROJECT_BUDGET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_AVATAR_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::ADJUST_DELETED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::ADJUST_TERMINATED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::ALL_KEYWORD_DELETED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::APP_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::DISABLE_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::KEYWORD_ADJUST_AUDITING_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::KEYWORD_ADJUST_NEW_CREATED_AUDITING_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::LACK_BASIC_MATERIAL_STATUS_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::LIVE_ROOM_NOT_AVAILABLE_FOR_DELIVERY_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_AWEME_ACCOUNT_OFFLINE_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_NO_SCHEDULE_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_OFFLINE_BALANCE_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_OFFLINE_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_PRODUCT_OFFLINE_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_PROJECT_OFFLINE_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::MATERIAL_STATUS_TIME_NO_REACH_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_AUDIT_REJECTED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_COMPLETED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_DELETED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_PAUSED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_REACHED_DELIVERY_DURATION_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_STATUS_AUDIT_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_STATUS_REAUDIT_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::PROJECT_TERMINATED_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::SHARED_WALLET_EXCEEDS_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus,
        self::TASK_BID_EXCEEDS_PROJECT_BUDGET_OcProjectToolsKeywordListV30DataListSecondStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsKeywordListV30DataListSecondStatus', $value));
        }
        return (string) $value;
    }
}
