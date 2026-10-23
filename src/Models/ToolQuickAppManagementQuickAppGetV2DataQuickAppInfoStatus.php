<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus
{
    public const AUDIT_ACCEPTED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_DOING_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus = 'AUDIT_REJECTED';
    public const AUDIT_SEND_REJECTED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus = 'AUDIT_SEND_REJECTED';
    public const REMOVED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus = 'REMOVED';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus,
        self::AUDIT_DOING_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus,
        self::AUDIT_REJECTED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus,
        self::AUDIT_SEND_REJECTED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus,
        self::REMOVED_ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolQuickAppManagementQuickAppGetV2DataQuickAppInfoStatus', $value));
        }
        return (string) $value;
    }
}
