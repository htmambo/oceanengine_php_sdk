<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAppGetV2AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsAppManagementAppGetV2AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsAppManagementAppGetV2AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsAppManagementAppGetV2AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsAppManagementAppGetV2AccountAssetQueryScope,
        self::ALL_ToolsAppManagementAppGetV2AccountAssetQueryScope,
        self::GROUP_ToolsAppManagementAppGetV2AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAppGetV2AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
