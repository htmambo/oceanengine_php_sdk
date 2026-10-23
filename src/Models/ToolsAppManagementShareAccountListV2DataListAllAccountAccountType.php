<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementShareAccountListV2DataListAllAccountAccountType
{
    public const BP_ToolsAppManagementShareAccountListV2DataListAllAccountAccountType = 'BP';
    public const STAR_ToolsAppManagementShareAccountListV2DataListAllAccountAccountType = 'STAR';
    public const AD_ToolsAppManagementShareAccountListV2DataListAllAccountAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementShareAccountListV2DataListAllAccountAccountType,
        self::STAR_ToolsAppManagementShareAccountListV2DataListAllAccountAccountType,
        self::AD_ToolsAppManagementShareAccountListV2DataListAllAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementShareAccountListV2DataListAllAccountAccountType', $value));
        }
        return (string) $value;
    }
}
