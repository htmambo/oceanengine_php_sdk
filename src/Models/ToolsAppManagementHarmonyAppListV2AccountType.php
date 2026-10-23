<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementHarmonyAppListV2AccountType
{
    public const BP_ToolsAppManagementHarmonyAppListV2AccountType = 'BP';
    public const AD_ToolsAppManagementHarmonyAppListV2AccountType = 'AD';
    public const STAR_ToolsAppManagementHarmonyAppListV2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementHarmonyAppListV2AccountType,
        self::AD_ToolsAppManagementHarmonyAppListV2AccountType,
        self::STAR_ToolsAppManagementHarmonyAppListV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementHarmonyAppListV2AccountType', $value));
        }
        return (string) $value;
    }
}
