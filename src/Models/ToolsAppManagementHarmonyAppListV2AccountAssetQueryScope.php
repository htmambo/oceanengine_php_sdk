<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope,
        self::ALL_ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope,
        self::GROUP_ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementHarmonyAppListV2AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
