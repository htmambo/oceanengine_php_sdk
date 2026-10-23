<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards
{
    public const ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards = 'Annual';
    public const LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards = 'Monthly';
    public const NONE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards = 'None';
    public const QUARTERLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards,
        self::LIFETIME_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards,
        self::MONTHLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards,
        self::NONE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards,
        self::QUARTERLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards,
        self::WEEKLY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionScheduleCards', $value));
        }
        return (string) $value;
    }
}
