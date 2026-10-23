<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupGetV2DataListSitesSiteAuditStatus
{
    public const UNKNOWN_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus = 'UNKNOWN';
    public const AUDITING_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus = 'AUDITING';
    public const ACCEPTED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus = 'ACCEPTED';
    public const CREATED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus = 'CREATED';
    public const REJECTED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus = 'REJECTED';
    public const BANNED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus = 'BANNED';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus,
        self::AUDITING_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus,
        self::ACCEPTED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus,
        self::CREATED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus,
        self::REJECTED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus,
        self::BANNED_ToolsLandingGroupGetV2DataListSitesSiteAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupGetV2DataListSitesSiteAuditStatus', $value));
        }
        return (string) $value;
    }
}
