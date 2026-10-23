<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsThirdSiteGetV2DataListAuditStatus
{
    public const AUDIT_UNKNOW_ToolsThirdSiteGetV2DataListAuditStatus = 'AUDIT_UNKNOW';
    public const AUDIT_ACCEPTED_ToolsThirdSiteGetV2DataListAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_ToolsThirdSiteGetV2DataListAuditStatus = 'AUDIT_REJECTED';
    public const AUDIT_BANNED_ToolsThirdSiteGetV2DataListAuditStatus = 'AUDIT_BANNED';
    public const AUDITING_ToolsThirdSiteGetV2DataListAuditStatus = 'AUDITING';
    public const AWAIT_AUDIT_ToolsThirdSiteGetV2DataListAuditStatus = 'AWAIT_AUDIT';

    public const ALLOWED_VALUES = [
        self::AUDIT_UNKNOW_ToolsThirdSiteGetV2DataListAuditStatus,
        self::AUDIT_ACCEPTED_ToolsThirdSiteGetV2DataListAuditStatus,
        self::AUDIT_REJECTED_ToolsThirdSiteGetV2DataListAuditStatus,
        self::AUDIT_BANNED_ToolsThirdSiteGetV2DataListAuditStatus,
        self::AUDITING_ToolsThirdSiteGetV2DataListAuditStatus,
        self::AWAIT_AUDIT_ToolsThirdSiteGetV2DataListAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsThirdSiteGetV2DataListAuditStatus', $value));
        }
        return (string) $value;
    }
}
