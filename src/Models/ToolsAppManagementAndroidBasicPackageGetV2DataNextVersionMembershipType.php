<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType
{
    public const ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType = 'ANNUAL';
    public const LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType = 'LIFETIME';
    public const MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType = 'MONTHLY';
    public const NONE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType,
        self::LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType,
        self::MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType,
        self::NONE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType,
        self::WEEKLY_DAILY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMembershipType', $value));
        }
        return (string) $value;
    }
}
