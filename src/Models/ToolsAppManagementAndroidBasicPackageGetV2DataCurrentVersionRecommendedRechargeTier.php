<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier
{
    public const ABOVE_200_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier,
        self::FROM_100_TO_200_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRecommendedRechargeTier', $value));
        }
        return (string) $value;
    }
}
