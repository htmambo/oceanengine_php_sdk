<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBookingGetV2AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsAppManagementBookingGetV2AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsAppManagementBookingGetV2AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsAppManagementBookingGetV2AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsAppManagementBookingGetV2AccountAssetQueryScope,
        self::ALL_ToolsAppManagementBookingGetV2AccountAssetQueryScope,
        self::GROUP_ToolsAppManagementBookingGetV2AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBookingGetV2AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
