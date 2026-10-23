<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAgentGetV2V2DataListAccountStatus
{
    public const STATUS_WAIT_FOR_BPM_AUDIT_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_WAIT_FOR_BPM_AUDIT';
    public const STATUS_SELF_SERVICE_UNAUDITED_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_SELF_SERVICE_UNAUDITED';
    public const STATUS_PENDING_CONFIRM_MODIFY_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_PENDING_CONFIRM_MODIFY';
    public const STATUS_WAIT_FOR_ACCOUNT_FEE_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_WAIT_FOR_ACCOUNT_FEE';
    public const STATUS_CONFIRM_MODIFY_FAIL_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_CONFIRM_MODIFY_FAIL';
    public const STATUS_WAIT_FOR_PUBLIC_AUTH_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_WAIT_FOR_PUBLIC_AUTH';
    public const STATUS_DISABLE_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_DISABLE';
    public const STATUS_CONFIRM_FAIL_END_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_CONFIRM_FAIL_END';
    public const STATUS_PENDING_CONFIRM_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_ENABLE_AND_AVATAR_AUDITING_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_ENABLE_AND_AVATAR_AUDITING';
    public const STATUS_PENDING_VERIFIED_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_PENDING_VERIFIED';
    public const STATUS_ENABLE_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_ENABLE';
    public const STATUS_PUNISH_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_PUNISH';
    public const STATUS_WAIT_FOR_BPM_FILE_CONTACT_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_WAIT_FOR_BPM_FILE_CONTACT';
    public const STATUS_CONFIRM_FAIL_ReportAgentGetV2V2DataListAccountStatus = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_WAIT_FOR_BPM_AUDIT_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_SELF_SERVICE_UNAUDITED_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_PENDING_CONFIRM_MODIFY_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_WAIT_FOR_ACCOUNT_FEE_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_CONFIRM_MODIFY_FAIL_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_WAIT_FOR_PUBLIC_AUTH_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_DISABLE_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_CONFIRM_FAIL_END_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_PENDING_CONFIRM_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_ENABLE_AND_AVATAR_AUDITING_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_PENDING_VERIFIED_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_ENABLE_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_PUNISH_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_WAIT_FOR_BPM_FILE_CONTACT_ReportAgentGetV2V2DataListAccountStatus,
        self::STATUS_CONFIRM_FAIL_ReportAgentGetV2V2DataListAccountStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAgentGetV2V2DataListAccountStatus', $value));
        }
        return (string) $value;
    }
}
