<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus
{
    public const STATUS_CONFIRM_FAIL_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_CONFIRM_FAIL';
    public const STATUS_CONFIRM_FAIL_END_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_CONFIRM_FAIL_END';
    public const STATUS_CONFIRM_MODIFY_FAIL_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_CONFIRM_MODIFY_FAIL';
    public const STATUS_DISABLE_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_DISABLE';
    public const STATUS_ENABLE_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_ENABLE';
    public const STATUS_LIMIT_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_LIMIT';
    public const STATUS_PENDING_CONFIRM_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_PENDING_CONFIRM_MODIFY_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_PENDING_CONFIRM_MODIFY';
    public const STATUS_PENDING_VERIFIED_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_PENDING_VERIFIED';
    public const STATUS_SELF_SERVICE_UNAUDITED_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_SELF_SERVICE_UNAUDITED';
    public const STATUS_WAIT_FOR_BPM_AUDIT_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_WAIT_FOR_BPM_AUDIT';
    public const STATUS_WAIT_FOR_PUBLIC_AUTH_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus = 'STATUS_WAIT_FOR_PUBLIC_AUTH';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRM_FAIL_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_CONFIRM_FAIL_END_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_CONFIRM_MODIFY_FAIL_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_DISABLE_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_ENABLE_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_LIMIT_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_PENDING_CONFIRM_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_PENDING_CONFIRM_MODIFY_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_PENDING_VERIFIED_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_SELF_SERVICE_UNAUDITED_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_WAIT_FOR_BPM_AUDIT_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
        self::STATUS_WAIT_FOR_PUBLIC_AUTH_AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvertiserInfoQueryV2DataAccountDetailListAdvertiserStatus', $value));
        }
        return (string) $value;
    }
}
