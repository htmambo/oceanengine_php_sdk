<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType
{
    public const BP_ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType = 'BP';
    public const STAR_ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType = 'STAR';
    public const AD_ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType,
        self::STAR_ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType,
        self::AD_ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementShareAccountListV2DataListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
