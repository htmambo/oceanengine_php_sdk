<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus
{
    public const ALL_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus = 'ALL';
    public const AUDIT_ACCEPTED_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_DOING_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus = 'AUDIT_REJECTED';
    public const ENABLE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus,
        self::AUDIT_ACCEPTED_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus,
        self::AUDIT_DOING_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus,
        self::AUDIT_REJECTED_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus,
        self::ENABLE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionStatus', $value));
        }
        return (string) $value;
    }
}
