<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupGetV2DataListSitesSiteOptStatus
{
    public const SITE_OPT_STATUS_DISABLE_ToolsLandingGroupGetV2DataListSitesSiteOptStatus = 'SITE_OPT_STATUS_DISABLE';
    public const SITE_OPT_STATUS_ENABLE_ToolsLandingGroupGetV2DataListSitesSiteOptStatus = 'SITE_OPT_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::SITE_OPT_STATUS_DISABLE_ToolsLandingGroupGetV2DataListSitesSiteOptStatus,
        self::SITE_OPT_STATUS_ENABLE_ToolsLandingGroupGetV2DataListSitesSiteOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupGetV2DataListSitesSiteOptStatus', $value));
        }
        return (string) $value;
    }
}
