<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus
{
    public const AUDITING_ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::AUDITING_ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus,
        self::AUDIT_ACCEPTED_ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletLinkListV30DataLinksAuditStatus', $value));
        }
        return (string) $value;
    }
}
