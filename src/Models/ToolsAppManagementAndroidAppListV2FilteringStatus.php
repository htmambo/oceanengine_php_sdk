<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidAppListV2FilteringStatus
{
    public const ALL_ToolsAppManagementAndroidAppListV2FilteringStatus = 'ALL';
    public const AUDIT_DOING_ToolsAppManagementAndroidAppListV2FilteringStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppManagementAndroidAppListV2FilteringStatus = 'AUDIT_REJECTED';
    public const AUDIT_ACCEPTED_ToolsAppManagementAndroidAppListV2FilteringStatus = 'AUDIT_ACCEPTED';
    public const ENABLE_ToolsAppManagementAndroidAppListV2FilteringStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementAndroidAppListV2FilteringStatus,
        self::AUDIT_DOING_ToolsAppManagementAndroidAppListV2FilteringStatus,
        self::AUDIT_REJECTED_ToolsAppManagementAndroidAppListV2FilteringStatus,
        self::AUDIT_ACCEPTED_ToolsAppManagementAndroidAppListV2FilteringStatus,
        self::ENABLE_ToolsAppManagementAndroidAppListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidAppListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
