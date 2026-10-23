<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatPoolListV2FilterAuditStatus
{
    public const AUDITING_ClueWechatPoolListV2FilterAuditStatus = 'AUDITING';
    public const AUDIT_REJECTED_ClueWechatPoolListV2FilterAuditStatus = 'AUDIT_REJECTED';
    public const AUDIT_ACCEPTED_ClueWechatPoolListV2FilterAuditStatus = 'AUDIT_ACCEPTED';

    public const ALLOWED_VALUES = [
        self::AUDITING_ClueWechatPoolListV2FilterAuditStatus,
        self::AUDIT_REJECTED_ClueWechatPoolListV2FilterAuditStatus,
        self::AUDIT_ACCEPTED_ClueWechatPoolListV2FilterAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatPoolListV2FilterAuditStatus', $value));
        }
        return (string) $value;
    }
}
