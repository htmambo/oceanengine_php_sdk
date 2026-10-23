<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementHarmonyAppListV2FilteringStatus
{
    public const ALL_ToolsAppManagementHarmonyAppListV2FilteringStatus = 'ALL';
    public const AUDIT_DOING_ToolsAppManagementHarmonyAppListV2FilteringStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppManagementHarmonyAppListV2FilteringStatus = 'AUDIT_REJECTED';
    public const AUDIT_ACCEPTED_ToolsAppManagementHarmonyAppListV2FilteringStatus = 'AUDIT_ACCEPTED';
    public const ENABLE_ToolsAppManagementHarmonyAppListV2FilteringStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementHarmonyAppListV2FilteringStatus,
        self::AUDIT_DOING_ToolsAppManagementHarmonyAppListV2FilteringStatus,
        self::AUDIT_REJECTED_ToolsAppManagementHarmonyAppListV2FilteringStatus,
        self::AUDIT_ACCEPTED_ToolsAppManagementHarmonyAppListV2FilteringStatus,
        self::ENABLE_ToolsAppManagementHarmonyAppListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementHarmonyAppListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
