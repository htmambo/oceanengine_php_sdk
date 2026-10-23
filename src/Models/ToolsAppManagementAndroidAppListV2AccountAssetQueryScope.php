<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidAppListV2AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsAppManagementAndroidAppListV2AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsAppManagementAndroidAppListV2AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsAppManagementAndroidAppListV2AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsAppManagementAndroidAppListV2AccountAssetQueryScope,
        self::ALL_ToolsAppManagementAndroidAppListV2AccountAssetQueryScope,
        self::GROUP_ToolsAppManagementAndroidAppListV2AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidAppListV2AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
