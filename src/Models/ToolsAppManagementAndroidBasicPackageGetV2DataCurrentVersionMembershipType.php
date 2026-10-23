<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType
{
    public const ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType = 'ANNUAL';
    public const LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType = 'LIFETIME';
    public const MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType = 'MONTHLY';
    public const NONE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType,
        self::LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType,
        self::MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType,
        self::NONE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType,
        self::WEEKLY_DAILY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMembershipType', $value));
        }
        return (string) $value;
    }
}
