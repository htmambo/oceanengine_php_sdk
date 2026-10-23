<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAppGetV2Status
{
    public const ALL_ToolsAppManagementAppGetV2Status = 'ALL';
    public const AUDIT_ACCEPTED_ToolsAppManagementAppGetV2Status = 'AUDIT_ACCEPTED';
    public const AUDIT_DOING_ToolsAppManagementAppGetV2Status = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppManagementAppGetV2Status = 'AUDIT_REJECTED';
    public const ENABLE_ToolsAppManagementAppGetV2Status = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementAppGetV2Status,
        self::AUDIT_ACCEPTED_ToolsAppManagementAppGetV2Status,
        self::AUDIT_DOING_ToolsAppManagementAppGetV2Status,
        self::AUDIT_REJECTED_ToolsAppManagementAppGetV2Status,
        self::ENABLE_ToolsAppManagementAppGetV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAppGetV2Status', $value));
        }
        return (string) $value;
    }
}
