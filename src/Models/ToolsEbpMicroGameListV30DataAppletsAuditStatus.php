<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameListV30DataAppletsAuditStatus
{
    public const ALL_ToolsEbpMicroGameListV30DataAppletsAuditStatus = 'ALL';
    public const AUDITING_ToolsEbpMicroGameListV30DataAppletsAuditStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_ToolsEbpMicroGameListV30DataAppletsAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_ToolsEbpMicroGameListV30DataAppletsAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpMicroGameListV30DataAppletsAuditStatus,
        self::AUDITING_ToolsEbpMicroGameListV30DataAppletsAuditStatus,
        self::AUDIT_ACCEPTED_ToolsEbpMicroGameListV30DataAppletsAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpMicroGameListV30DataAppletsAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameListV30DataAppletsAuditStatus', $value));
        }
        return (string) $value;
    }
}
