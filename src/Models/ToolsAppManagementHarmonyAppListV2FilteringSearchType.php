<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementHarmonyAppListV2FilteringSearchType
{
    public const ALL_ToolsAppManagementHarmonyAppListV2FilteringSearchType = 'ALL';
    public const CREATE_ONLY_ToolsAppManagementHarmonyAppListV2FilteringSearchType = 'CREATE_ONLY';
    public const SHARE_ONLY_ToolsAppManagementHarmonyAppListV2FilteringSearchType = 'SHARE_ONLY';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementHarmonyAppListV2FilteringSearchType,
        self::CREATE_ONLY_ToolsAppManagementHarmonyAppListV2FilteringSearchType,
        self::SHARE_ONLY_ToolsAppManagementHarmonyAppListV2FilteringSearchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementHarmonyAppListV2FilteringSearchType', $value));
        }
        return (string) $value;
    }
}
