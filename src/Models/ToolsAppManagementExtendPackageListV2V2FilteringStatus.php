<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageListV2V2FilteringStatus
{
    public const ALL_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'ALL';
    public const NOT_UPDATE_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'NOT_UPDATE';
    public const CREATING_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'CREATING';
    public const UPDATING_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'UPDATING';
    public const ENABLE_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'ENABLE';
    public const CREATION_FAILED_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'CREATION_FAILED';
    public const UPDATE_FAILED_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'UPDATE_FAILED';
    public const PUBLISHED_ToolsAppManagementExtendPackageListV2V2FilteringStatus = 'PUBLISHED';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::NOT_UPDATE_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::CREATING_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::UPDATING_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::ENABLE_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::CREATION_FAILED_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::UPDATE_FAILED_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
        self::PUBLISHED_ToolsAppManagementExtendPackageListV2V2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageListV2V2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
