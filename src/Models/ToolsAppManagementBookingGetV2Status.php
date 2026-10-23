<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBookingGetV2Status
{
    public const ALL_ToolsAppManagementBookingGetV2Status = 'ALL';
    public const AUDIT_DOING_ToolsAppManagementBookingGetV2Status = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppManagementBookingGetV2Status = 'AUDIT_REJECTED';
    public const BOOKING_ToolsAppManagementBookingGetV2Status = 'BOOKING';
    public const ENABLE_ToolsAppManagementBookingGetV2Status = 'ENABLE';
    public const PAST_DUE_ToolsAppManagementBookingGetV2Status = 'PAST_DUE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementBookingGetV2Status,
        self::AUDIT_DOING_ToolsAppManagementBookingGetV2Status,
        self::AUDIT_REJECTED_ToolsAppManagementBookingGetV2Status,
        self::BOOKING_ToolsAppManagementBookingGetV2Status,
        self::ENABLE_ToolsAppManagementBookingGetV2Status,
        self::PAST_DUE_ToolsAppManagementBookingGetV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBookingGetV2Status', $value));
        }
        return (string) $value;
    }
}
