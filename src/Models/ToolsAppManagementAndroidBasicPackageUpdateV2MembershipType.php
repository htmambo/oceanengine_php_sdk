<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType
{
    public const ANNUAL_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType = 'ANNUAL';
    public const LIFETIME_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType = 'LIFETIME';
    public const MONTHLY_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType = 'MONTHLY';
    public const NONE_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType = 'NONE';
    public const WEEKLY_DAILY_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType = 'WEEKLY_DAILY';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType,
        self::LIFETIME_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType,
        self::MONTHLY_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType,
        self::NONE_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType,
        self::WEEKLY_DAILY_ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2MembershipType', $value));
        }
        return (string) $value;
    }
}
