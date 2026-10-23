<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPreAuditGetV2DataListStatus
{
    public const AUDITING_ToolsPreAuditGetV2DataListStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_ToolsPreAuditGetV2DataListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_FAILED_ToolsPreAuditGetV2DataListStatus = 'AUDIT_FAILED';
    public const AUDIT_REJECTED_ToolsPreAuditGetV2DataListStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::AUDITING_ToolsPreAuditGetV2DataListStatus,
        self::AUDIT_ACCEPTED_ToolsPreAuditGetV2DataListStatus,
        self::AUDIT_FAILED_ToolsPreAuditGetV2DataListStatus,
        self::AUDIT_REJECTED_ToolsPreAuditGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPreAuditGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
