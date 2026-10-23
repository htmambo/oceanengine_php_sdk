<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentAdvBiddingListQueryV2DataDataAccountStatus
{
    public const STATUS_DISABLE_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_DISABLE';
    public const STATUS_PENDING_CONFIRM_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_PENDING_CONFIRM';
    public const STATUS_PENDING_VERIFIED_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_PENDING_VERIFIED';
    public const STATUS_CONFIRM_FAIL_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_CONFIRM_FAIL';
    public const STATUS_ENABLE_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_ENABLE';
    public const STATUS_CONFIRM_FAIL_END_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_CONFIRM_FAIL_END';
    public const STATUS_PENDING_CONFIRM_MODIFY_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_PENDING_CONFIRM_MODIFY';
    public const STATUS_CONFIRM_MODIFY_FAIL_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_CONFIRM_MODIFY_FAIL';
    public const STATUS_PUNISH_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_PUNISH';
    public const STATUS_WAIT_FOR_BPM_AUDIT_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_BPM_AUDIT';
    public const STATUS_SELF_SERVICE_UNAUDITED_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_SELF_SERVICE_UNAUDITED';
    public const STATUS_ENABLE_AND_AVATAR_AUDITING_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_ENABLE_AND_AVATAR_AUDITING';
    public const STATUS_WAIT_FOR_BPM_FILE_CONTACT_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_BPM_FILE_CONTACT';
    public const STATUS_WAIT_FOR_ACCOUNT_FEE_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_ACCOUNT_FEE';
    public const STATUS_WAIT_FOR_PUBLIC_AUTH_AgentAdvBiddingListQueryV2DataDataAccountStatus = 'STATUS_WAIT_FOR_PUBLIC_AUTH';

    public const ALLOWED_VALUES = [
        self::STATUS_DISABLE_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_PENDING_CONFIRM_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_PENDING_VERIFIED_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_CONFIRM_FAIL_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_ENABLE_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_CONFIRM_FAIL_END_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_PENDING_CONFIRM_MODIFY_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_CONFIRM_MODIFY_FAIL_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_PUNISH_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_BPM_AUDIT_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_SELF_SERVICE_UNAUDITED_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_ENABLE_AND_AVATAR_AUDITING_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_BPM_FILE_CONTACT_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_ACCOUNT_FEE_AgentAdvBiddingListQueryV2DataDataAccountStatus,
        self::STATUS_WAIT_FOR_PUBLIC_AUTH_AgentAdvBiddingListQueryV2DataDataAccountStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentAdvBiddingListQueryV2DataDataAccountStatus', $value));
        }
        return (string) $value;
    }
}
