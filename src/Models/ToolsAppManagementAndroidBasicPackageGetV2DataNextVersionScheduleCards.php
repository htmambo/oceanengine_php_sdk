<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards
{
    public const ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards = 'Annual';
    public const LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards = 'Monthly';
    public const NONE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards = 'None';
    public const QUARTERLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards,
        self::LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards,
        self::MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards,
        self::NONE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards,
        self::QUARTERLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards,
        self::WEEKLY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionScheduleCards', $value));
        }
        return (string) $value;
    }
}
