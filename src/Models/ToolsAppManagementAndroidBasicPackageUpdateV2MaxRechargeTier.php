<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier
{
    public const ABOVE_200_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier,
        self::FROM_100_TO_200_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2MaxRechargeTier', $value));
        }
        return (string) $value;
    }
}
