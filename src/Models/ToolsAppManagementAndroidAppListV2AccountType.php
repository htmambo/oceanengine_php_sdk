<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidAppListV2AccountType
{
    public const AD_ToolsAppManagementAndroidAppListV2AccountType = 'AD';
    public const BP_ToolsAppManagementAndroidAppListV2AccountType = 'BP';
    public const STAR_ToolsAppManagementAndroidAppListV2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementAndroidAppListV2AccountType,
        self::BP_ToolsAppManagementAndroidAppListV2AccountType,
        self::STAR_ToolsAppManagementAndroidAppListV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidAppListV2AccountType', $value));
        }
        return (string) $value;
    }
}
