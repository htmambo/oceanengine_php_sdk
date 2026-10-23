<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30DataInvitationsSubStatus
{
    public const AUTHORIZATION_ABORTED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'AUTHORIZATION_ABORTED';
    public const AUTHORIZATION_EXPIRED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'AUTHORIZATION_EXPIRED';
    public const AUTHORIZE_FAILED_BY_AWEME_LocalAwemeAuthListV30DataInvitationsSubStatus = 'AUTHORIZE_FAILED_BY_AWEME';
    public const AUTHOR_CANCEL_INVITATION_LocalAwemeAuthListV30DataInvitationsSubStatus = 'AUTHOR_CANCEL_INVITATION';
    public const BELOW_THRESHOLD_CANCELED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'BELOW_THRESHOLD_CANCELED';
    public const CANCEL_APPROVED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'CANCEL_APPROVED';
    public const CANCEL_B_TO_C_LocalAwemeAuthListV30DataInvitationsSubStatus = 'CANCEL_B_TO_C';
    public const CANCEL_ON_TIMEOUT_LocalAwemeAuthListV30DataInvitationsSubStatus = 'CANCEL_ON_TIMEOUT';
    public const DENIED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'DENIED';
    public const INVITATION_EXPIRED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'INVITATION_EXPIRED';
    public const INVITATION_REVOKED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'INVITATION_REVOKED';
    public const IN_EFFECT_LocalAwemeAuthListV30DataInvitationsSubStatus = 'IN_EFFECT';
    public const RENEWAL_FAILED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'RENEWAL_FAILED';
    public const RENEWAL_IN_PROGRESS_LocalAwemeAuthListV30DataInvitationsSubStatus = 'RENEWAL_IN_PROGRESS';
    public const RENEWAL_SUCCESS_LocalAwemeAuthListV30DataInvitationsSubStatus = 'RENEWAL_SUCCESS';
    public const RENEWAL_VALIDATION_FAILED_LocalAwemeAuthListV30DataInvitationsSubStatus = 'RENEWAL_VALIDATION_FAILED';

    public const ALLOWED_VALUES = [
        self::AUTHORIZATION_ABORTED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::AUTHORIZATION_EXPIRED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::AUTHORIZE_FAILED_BY_AWEME_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::AUTHOR_CANCEL_INVITATION_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::BELOW_THRESHOLD_CANCELED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::CANCEL_APPROVED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::CANCEL_B_TO_C_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::CANCEL_ON_TIMEOUT_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::DENIED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::INVITATION_EXPIRED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::INVITATION_REVOKED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::IN_EFFECT_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::RENEWAL_FAILED_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::RENEWAL_IN_PROGRESS_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::RENEWAL_SUCCESS_LocalAwemeAuthListV30DataInvitationsSubStatus,
        self::RENEWAL_VALIDATION_FAILED_LocalAwemeAuthListV30DataInvitationsSubStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30DataInvitationsSubStatus', $value));
        }
        return (string) $value;
    }
}
