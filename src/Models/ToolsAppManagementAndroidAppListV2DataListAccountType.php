<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidAppListV2DataListAccountType
{
    public const AD_ToolsAppManagementAndroidAppListV2DataListAccountType = 'AD';
    public const BP_ToolsAppManagementAndroidAppListV2DataListAccountType = 'BP';
    public const STAR_ToolsAppManagementAndroidAppListV2DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementAndroidAppListV2DataListAccountType,
        self::BP_ToolsAppManagementAndroidAppListV2DataListAccountType,
        self::STAR_ToolsAppManagementAndroidAppListV2DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidAppListV2DataListAccountType', $value));
        }
        return (string) $value;
    }
}
