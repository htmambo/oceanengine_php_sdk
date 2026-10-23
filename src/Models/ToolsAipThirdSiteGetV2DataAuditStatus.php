<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAipThirdSiteGetV2DataAuditStatus
{
    public const AUDIT_UNKNOW_ToolsAipThirdSiteGetV2DataAuditStatus = 'AUDIT_UNKNOW';
    public const AUDIT_ACCEPTED_ToolsAipThirdSiteGetV2DataAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_REJECTED_ToolsAipThirdSiteGetV2DataAuditStatus = 'AUDIT_REJECTED';
    public const AUDIT_BANNED_ToolsAipThirdSiteGetV2DataAuditStatus = 'AUDIT_BANNED';
    public const AUDITING_ToolsAipThirdSiteGetV2DataAuditStatus = 'AUDITING';
    public const AWAIT_AUDIT_ToolsAipThirdSiteGetV2DataAuditStatus = 'AWAIT_AUDIT';

    public const ALLOWED_VALUES = [
        self::AUDIT_UNKNOW_ToolsAipThirdSiteGetV2DataAuditStatus,
        self::AUDIT_ACCEPTED_ToolsAipThirdSiteGetV2DataAuditStatus,
        self::AUDIT_REJECTED_ToolsAipThirdSiteGetV2DataAuditStatus,
        self::AUDIT_BANNED_ToolsAipThirdSiteGetV2DataAuditStatus,
        self::AUDITING_ToolsAipThirdSiteGetV2DataAuditStatus,
        self::AWAIT_AUDIT_ToolsAipThirdSiteGetV2DataAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAipThirdSiteGetV2DataAuditStatus', $value));
        }
        return (string) $value;
    }
}
