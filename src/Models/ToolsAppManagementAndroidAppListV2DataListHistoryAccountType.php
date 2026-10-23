<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidAppListV2DataListHistoryAccountType
{
    public const AD_ToolsAppManagementAndroidAppListV2DataListHistoryAccountType = 'AD';
    public const BP_ToolsAppManagementAndroidAppListV2DataListHistoryAccountType = 'BP';
    public const STAR_ToolsAppManagementAndroidAppListV2DataListHistoryAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementAndroidAppListV2DataListHistoryAccountType,
        self::BP_ToolsAppManagementAndroidAppListV2DataListHistoryAccountType,
        self::STAR_ToolsAppManagementAndroidAppListV2DataListHistoryAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidAppListV2DataListHistoryAccountType', $value));
        }
        return (string) $value;
    }
}
