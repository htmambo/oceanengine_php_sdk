<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLandingGroupCreateV2DataSitesSiteOptStatus
{
    public const SITE_OPT_STATUS_DISABLE_ToolsLandingGroupCreateV2DataSitesSiteOptStatus = 'SITE_OPT_STATUS_DISABLE';
    public const SITE_OPT_STATUS_ENABLE_ToolsLandingGroupCreateV2DataSitesSiteOptStatus = 'SITE_OPT_STATUS_ENABLE';

    public const ALLOWED_VALUES = [
        self::SITE_OPT_STATUS_DISABLE_ToolsLandingGroupCreateV2DataSitesSiteOptStatus,
        self::SITE_OPT_STATUS_ENABLE_ToolsLandingGroupCreateV2DataSitesSiteOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLandingGroupCreateV2DataSitesSiteOptStatus', $value));
        }
        return (string) $value;
    }
}
