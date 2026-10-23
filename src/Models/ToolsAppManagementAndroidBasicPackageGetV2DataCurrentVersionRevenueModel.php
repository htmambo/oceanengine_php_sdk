<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel
{
    public const IAA_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel = 'IAA';
    public const IAAP_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel = 'IAAP';
    public const IAP_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel,
        self::IAAP_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel,
        self::IAP_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionRevenueModel', $value));
        }
        return (string) $value;
    }
}
