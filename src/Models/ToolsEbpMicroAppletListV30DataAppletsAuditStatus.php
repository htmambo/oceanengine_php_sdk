<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletListV30DataAppletsAuditStatus
{
    public const AUDIT_ACCEPTED_ToolsEbpMicroAppletListV30DataAppletsAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDITING_ToolsEbpMicroAppletListV30DataAppletsAuditStatus = 'AUDITING';
    public const AUDIT_REJECTED_ToolsEbpMicroAppletListV30DataAppletsAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolsEbpMicroAppletListV30DataAppletsAuditStatus,
        self::AUDITING_ToolsEbpMicroAppletListV30DataAppletsAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpMicroAppletListV30DataAppletsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletListV30DataAppletsAuditStatus', $value));
        }
        return (string) $value;
    }
}
