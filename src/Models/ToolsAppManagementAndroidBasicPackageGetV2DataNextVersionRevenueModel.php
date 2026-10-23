<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel
{
    public const IAA_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel = 'IAA';
    public const IAAP_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel = 'IAAP';
    public const IAP_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel,
        self::IAAP_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel,
        self::IAP_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionRevenueModel', $value));
        }
        return (string) $value;
    }
}
