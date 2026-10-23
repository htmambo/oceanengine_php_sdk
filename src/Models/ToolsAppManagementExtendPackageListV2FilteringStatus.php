<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageListV2FilteringStatus
{
    public const UPDATING_ToolsAppManagementExtendPackageListV2FilteringStatus = 'UPDATING';
    public const ALL_ToolsAppManagementExtendPackageListV2FilteringStatus = 'ALL';
    public const CREATION_FAILED_ToolsAppManagementExtendPackageListV2FilteringStatus = 'CREATION_FAILED';
    public const PUBLISHED_ToolsAppManagementExtendPackageListV2FilteringStatus = 'PUBLISHED';
    public const CREATING_ToolsAppManagementExtendPackageListV2FilteringStatus = 'CREATING';
    public const UPDATE_FAILED_ToolsAppManagementExtendPackageListV2FilteringStatus = 'UPDATE_FAILED';
    public const NOT_UPDATE_ToolsAppManagementExtendPackageListV2FilteringStatus = 'NOT_UPDATE';

    public const ALLOWED_VALUES = [
        self::UPDATING_ToolsAppManagementExtendPackageListV2FilteringStatus,
        self::ALL_ToolsAppManagementExtendPackageListV2FilteringStatus,
        self::CREATION_FAILED_ToolsAppManagementExtendPackageListV2FilteringStatus,
        self::PUBLISHED_ToolsAppManagementExtendPackageListV2FilteringStatus,
        self::CREATING_ToolsAppManagementExtendPackageListV2FilteringStatus,
        self::UPDATE_FAILED_ToolsAppManagementExtendPackageListV2FilteringStatus,
        self::NOT_UPDATE_ToolsAppManagementExtendPackageListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
