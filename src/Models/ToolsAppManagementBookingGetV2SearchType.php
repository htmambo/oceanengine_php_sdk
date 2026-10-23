<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBookingGetV2SearchType
{
    public const ALL_ToolsAppManagementBookingGetV2SearchType = 'ALL';
    public const CREATE_ONLY_ToolsAppManagementBookingGetV2SearchType = 'CREATE_ONLY';
    public const SHARED_ONLY_ToolsAppManagementBookingGetV2SearchType = 'SHARED_ONLY';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementBookingGetV2SearchType,
        self::CREATE_ONLY_ToolsAppManagementBookingGetV2SearchType,
        self::SHARED_ONLY_ToolsAppManagementBookingGetV2SearchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBookingGetV2SearchType', $value));
        }
        return (string) $value;
    }
}
