<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatAppletListV30DataAppletsAuditStatus
{
    public const AUDIT_ACCEPTED_ToolsEbpWechatAppletListV30DataAppletsAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDITING_ToolsEbpWechatAppletListV30DataAppletsAuditStatus = 'AUDITING';
    public const AUDIT_REJECTED_ToolsEbpWechatAppletListV30DataAppletsAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolsEbpWechatAppletListV30DataAppletsAuditStatus,
        self::AUDITING_ToolsEbpWechatAppletListV30DataAppletsAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpWechatAppletListV30DataAppletsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatAppletListV30DataAppletsAuditStatus', $value));
        }
        return (string) $value;
    }
}
