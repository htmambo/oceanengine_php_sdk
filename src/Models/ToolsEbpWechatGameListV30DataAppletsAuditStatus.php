<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatGameListV30DataAppletsAuditStatus
{
    public const AUDIT_ACCEPTED_ToolsEbpWechatGameListV30DataAppletsAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDITING_ToolsEbpWechatGameListV30DataAppletsAuditStatus = 'AUDITING';
    public const AUDIT_REJECTED_ToolsEbpWechatGameListV30DataAppletsAuditStatus = 'AUDIT_REJECTED';
    public const AUDIT_OFFLINE_ToolsEbpWechatGameListV30DataAppletsAuditStatus = 'AUDIT_OFFLINE';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolsEbpWechatGameListV30DataAppletsAuditStatus,
        self::AUDITING_ToolsEbpWechatGameListV30DataAppletsAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpWechatGameListV30DataAppletsAuditStatus,
        self::AUDIT_OFFLINE_ToolsEbpWechatGameListV30DataAppletsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatGameListV30DataAppletsAuditStatus', $value));
        }
        return (string) $value;
    }
}
