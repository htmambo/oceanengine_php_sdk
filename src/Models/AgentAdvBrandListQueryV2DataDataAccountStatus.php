<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvBrandListQueryV2DataDataAccountStatus
{
    public const STATUS_DISABLE_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_DISABLE';
    public const STATUS_PENDING_CONFIRM_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_PENDING_VERIFIED_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_PENDING_VERIFIED';
    public const STATUS_CONFIRM_FAIL_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_CONFIRM_FAIL';
    public const STATUS_ENABLE_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_ENABLE';
    public const STATUS_CONFIRM_FAIL_END_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_CONFIRM_FAIL_END';
    public const STATUS_PENDING_CONFIRM_MODIFY_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_PENDING_CONFIRM_MODIFY';
    public const STATUS_CONFIRM_MODIFY_FAIL_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_CONFIRM_MODIFY_FAIL';
    public const STATUS_PUNISH_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_PUNISH';
    public const STATUS_WAIT_FOR_BPM_AUDIT_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_BPM_AUDIT';
    public const STATUS_SELF_SERVICE_UNAUDITED_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_SELF_SERVICE_UNAUDITED';
    public const STATUS_ENABLE_AND_AVATAR_AUDITING_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_ENABLE_AND_AVATAR_AUDITING';
    public const STATUS_WAIT_FOR_BPM_FILE_CONTACT_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_BPM_FILE_CONTACT';
    public const STATUS_WAIT_FOR_ACCOUNT_FEE_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_ACCOUNT_FEE';
    public const STATUS_WAIT_FOR_PUBLIC_AUTH_AgentAdvBrandListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_PUBLIC_AUTH';

    public const ALLOWED_VALUES = [
        self::STATUS_DISABLE_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_PENDING_CONFIRM_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_PENDING_VERIFIED_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_CONFIRM_FAIL_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_ENABLE_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_CONFIRM_FAIL_END_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_PENDING_CONFIRM_MODIFY_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_CONFIRM_MODIFY_FAIL_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_PUNISH_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_BPM_AUDIT_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_SELF_SERVICE_UNAUDITED_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_ENABLE_AND_AVATAR_AUDITING_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_BPM_FILE_CONTACT_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_ACCOUNT_FEE_AgentAdvBrandListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_PUBLIC_AUTH_AgentAdvBrandListQueryV2DataDataAccountStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvBrandListQueryV2DataDataAccountStatus', $value));
        }
        return (string) $value;
    }
}
