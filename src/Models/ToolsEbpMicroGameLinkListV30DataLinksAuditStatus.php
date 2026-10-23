<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameLinkListV30DataLinksAuditStatus
{
    public const ALL_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus = 'ALL';
    public const AUDITING_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus = 'AUDITING';
    public const AUDIT_ACCEPTED_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus,
        self::AUDITING_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus,
        self::AUDIT_ACCEPTED_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus,
        self::AUDIT_REJECTED_ToolsEbpMicroGameLinkListV30DataLinksAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameLinkListV30DataLinksAuditStatus', $value));
        }
        return (string) $value;
    }
}
