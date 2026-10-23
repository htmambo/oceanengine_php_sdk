<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards
{
    public const ANNUAL_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards = 'Annual';
    public const LIFETIME_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards = 'Lifetime';
    public const MONTHLY_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards = 'Monthly';
    public const NONE_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards = 'None';
    public const QUARTERLY_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards = 'Quarterly';
    public const WEEKLY_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards = 'Weekly';

    public const ALLOWED_VALUES = [
        self::ANNUAL_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards,
        self::LIFETIME_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards,
        self::MONTHLY_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards,
        self::NONE_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards,
        self::QUARTERLY_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards,
        self::WEEKLY_ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2ScheduleCards', $value));
        }
        return (string) $value;
    }
}
