<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserInfoV2DataStatus
{
    public const STATUS_WAIT_FOR_BPM_AUDIT_AdvertiserInfoV2DataStatus = 'STATUS_WAIT_FOR_BPM_AUDIT';
    public const STATUS_SELF_SERVICE_UNAUDITED_AdvertiserInfoV2DataStatus = 'STATUS_SELF_SERVICE_UNAUDITED';
    public const STATUS_PENDING_CONFIRM_MODIFY_AdvertiserInfoV2DataStatus = 'STATUS_PENDING_CONFIRM_MODIFY';
    public const STATUS_WAIT_FOR_PUBLIC_AUTH_AdvertiserInfoV2DataStatus = 'STATUS_WAIT_FOR_PUBLIC_AUTH';
    public const STATUS_CONFIRM_MODIFY_FAIL_AdvertiserInfoV2DataStatus = 'STATUS_CONFIRM_MODIFY_FAIL';
    public const STATUS_DISABLE_AdvertiserInfoV2DataStatus = 'STATUS_DISABLE';
    public const STATUS_CONFIRM_FAIL_END_AdvertiserInfoV2DataStatus = 'STATUS_CONFIRM_FAIL_END';
    public const STATUS_PENDING_CONFIRM_AdvertiserInfoV2DataStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_PENDING_VERIFIED_AdvertiserInfoV2DataStatus = 'STATUS_PENDING_VERIFIED';
    public const STATUS_LIMIT_AdvertiserInfoV2DataStatus = 'STATUS_LIMIT';
    public const STATUS_ENABLE_AdvertiserInfoV2DataStatus = 'STATUS_ENABLE';
    public const STATUS_CONFIRM_FAIL_AdvertiserInfoV2DataStatus = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_WAIT_FOR_BPM_AUDIT_AdvertiserInfoV2DataStatus,
        self::STATUS_SELF_SERVICE_UNAUDITED_AdvertiserInfoV2DataStatus,
        self::STATUS_PENDING_CONFIRM_MODIFY_AdvertiserInfoV2DataStatus,
        self::STATUS_WAIT_FOR_PUBLIC_AUTH_AdvertiserInfoV2DataStatus,
        self::STATUS_CONFIRM_MODIFY_FAIL_AdvertiserInfoV2DataStatus,
        self::STATUS_DISABLE_AdvertiserInfoV2DataStatus,
        self::STATUS_CONFIRM_FAIL_END_AdvertiserInfoV2DataStatus,
        self::STATUS_PENDING_CONFIRM_AdvertiserInfoV2DataStatus,
        self::STATUS_PENDING_VERIFIED_AdvertiserInfoV2DataStatus,
        self::STATUS_LIMIT_AdvertiserInfoV2DataStatus,
        self::STATUS_ENABLE_AdvertiserInfoV2DataStatus,
        self::STATUS_CONFIRM_FAIL_AdvertiserInfoV2DataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserInfoV2DataStatus', $value));
        }
        return (string) $value;
    }
}
