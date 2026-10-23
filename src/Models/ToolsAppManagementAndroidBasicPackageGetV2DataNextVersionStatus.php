<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus
{
    public const ALL_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus = 'ALL';
    public const AUDIT_ACCEPTED_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_DOING_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus = 'AUDIT_REJECTED';
    public const ENABLE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus,
        self::AUDIT_ACCEPTED_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus,
        self::AUDIT_DOING_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus,
        self::AUDIT_REJECTED_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus,
        self::ENABLE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionStatus', $value));
        }
        return (string) $value;
    }
}
