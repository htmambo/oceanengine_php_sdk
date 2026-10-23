<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType
{
    public const AUTHOR_CANCEL_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType = 'AUTHOR_CANCEL';
    public const BELOW_THRESHOLD_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType = 'BELOW_THRESHOLD';
    public const BELOW_THRESHOLD_ALARM_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType = 'BELOW_THRESHOLD_ALARM';
    public const NEAR_EXPIRY_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType = 'NEAR_EXPIRY';

    public const ALLOWED_VALUES = [
        self::AUTHOR_CANCEL_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType,
        self::BELOW_THRESHOLD_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType,
        self::BELOW_THRESHOLD_ALARM_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType,
        self::NEAR_EXPIRY_LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30DataInvitationsTagsPageRecordTagType', $value));
        }
        return (string) $value;
    }
}
