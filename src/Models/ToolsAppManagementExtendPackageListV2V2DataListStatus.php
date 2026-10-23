<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageListV2V2DataListStatus
{
    public const ENABLE_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'ENABLE';
    public const NOT_UPDATE_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'NOT_UPDATE';
    public const ALL_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'ALL';
    public const CREATING_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'CREATING';
    public const UPDATING_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'UPDATING';
    public const CREATION_FAILED_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'CREATION_FAILED';
    public const UPDATE_FAILED_ToolsAppManagementExtendPackageListV2V2DataListStatus = 'UPDATE_FAILED';

    public const ALLOWED_VALUES = [
        self::ENABLE_ToolsAppManagementExtendPackageListV2V2DataListStatus,
        self::NOT_UPDATE_ToolsAppManagementExtendPackageListV2V2DataListStatus,
        self::ALL_ToolsAppManagementExtendPackageListV2V2DataListStatus,
        self::CREATING_ToolsAppManagementExtendPackageListV2V2DataListStatus,
        self::UPDATING_ToolsAppManagementExtendPackageListV2V2DataListStatus,
        self::CREATION_FAILED_ToolsAppManagementExtendPackageListV2V2DataListStatus,
        self::UPDATE_FAILED_ToolsAppManagementExtendPackageListV2V2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageListV2V2DataListStatus', $value));
        }
        return (string) $value;
    }
}
