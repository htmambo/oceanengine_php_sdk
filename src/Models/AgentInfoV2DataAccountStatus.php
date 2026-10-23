<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentInfoV2DataAccountStatus
{
    public const STATUS_WAIT_FOR_BPM_AUDIT_AgentInfoV2DataAccountStatus = 'STATUS_WAIT_FOR_BPM_AUDIT';
    public const STATUS_SELF_SERVICE_UNAUDITED_AgentInfoV2DataAccountStatus = 'STATUS_SELF_SERVICE_UNAUDITED';
    public const STATUS_PENDING_CONFIRM_MODIFY_AgentInfoV2DataAccountStatus = 'STATUS_PENDING_CONFIRM_MODIFY';
    public const STATUS_WAIT_FOR_PUBLIC_AUTH_AgentInfoV2DataAccountStatus = 'STATUS_WAIT_FOR_PUBLIC_AUTH';
    public const STATUS_CONFIRM_MODIFY_FAIL_AgentInfoV2DataAccountStatus = 'STATUS_CONFIRM_MODIFY_FAIL';
    public const STATUS_DISABLE_AgentInfoV2DataAccountStatus = 'STATUS_DISABLE';
    public const STATUS_CONFIRM_FAIL_END_AgentInfoV2DataAccountStatus = 'STATUS_CONFIRM_FAIL_END';
    public const STATUS_PENDING_CONFIRM_AgentInfoV2DataAccountStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_PENDING_VERIFIED_AgentInfoV2DataAccountStatus = 'STATUS_PENDING_VERIFIED';
    public const STATUS_LIMIT_AgentInfoV2DataAccountStatus = 'STATUS_LIMIT';
    public const STATUS_ENABLE_AgentInfoV2DataAccountStatus = 'STATUS_ENABLE';
    public const STATUS_CONFIRM_FAIL_AgentInfoV2DataAccountStatus = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_WAIT_FOR_BPM_AUDIT_AgentInfoV2DataAccountStatus,
        self::STATUS_SELF_SERVICE_UNAUDITED_AgentInfoV2DataAccountStatus,
        self::STATUS_PENDING_CONFIRM_MODIFY_AgentInfoV2DataAccountStatus,
        self::STATUS_WAIT_FOR_PUBLIC_AUTH_AgentInfoV2DataAccountStatus,
        self::STATUS_CONFIRM_MODIFY_FAIL_AgentInfoV2DataAccountStatus,
        self::STATUS_DISABLE_AgentInfoV2DataAccountStatus,
        self::STATUS_CONFIRM_FAIL_END_AgentInfoV2DataAccountStatus,
        self::STATUS_PENDING_CONFIRM_AgentInfoV2DataAccountStatus,
        self::STATUS_PENDING_VERIFIED_AgentInfoV2DataAccountStatus,
        self::STATUS_LIMIT_AgentInfoV2DataAccountStatus,
        self::STATUS_ENABLE_AgentInfoV2DataAccountStatus,
        self::STATUS_CONFIRM_FAIL_AgentInfoV2DataAccountStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentInfoV2DataAccountStatus', $value));
        }
        return (string) $value;
    }
}
