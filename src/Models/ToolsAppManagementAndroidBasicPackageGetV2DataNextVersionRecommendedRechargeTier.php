<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier
{
    public const ABOVE_200_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier,
        self::FROM_100_TO_200_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRecommendedRechargeTier', $value));
        }
        return (string) $value;
    }
}
