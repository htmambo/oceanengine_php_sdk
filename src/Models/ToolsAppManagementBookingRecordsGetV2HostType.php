<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBookingRecordsGetV2HostType
{
    public const HOST_IN_ToolsAppManagementBookingRecordsGetV2HostType = 'HOST_IN';
    public const HOST_OUT_ToolsAppManagementBookingRecordsGetV2HostType = 'HOST_OUT';

    public const ALLOWED_VALUES = [
        self::HOST_IN_ToolsAppManagementBookingRecordsGetV2HostType,
        self::HOST_OUT_ToolsAppManagementBookingRecordsGetV2HostType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBookingRecordsGetV2HostType', $value));
        }
        return (string) $value;
    }
}
