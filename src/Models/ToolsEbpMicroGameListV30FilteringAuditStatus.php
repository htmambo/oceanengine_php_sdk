<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameListV30FilteringAuditStatus
{
    public const ALL_ToolsEbpMicroGameListV30FilteringAuditStatus = 'ALL';
    public const AUDITING_ToolsEbpMicroGameListV30FilteringAuditStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_ToolsEbpMicroGameListV30FilteringAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_ToolsEbpMicroGameListV30FilteringAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpMicroGameListV30FilteringAuditStatus,
        self::AUDITING_ToolsEbpMicroGameListV30FilteringAuditStatus,
        self::AUDIT_ACCEPTED_ToolsEbpMicroGameListV30FilteringAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpMicroGameListV30FilteringAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameListV30FilteringAuditStatus', $value));
        }
        return (string) $value;
    }
}
