<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType
{
    public const BP_ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType = 'STAR';
    public const AD_ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType,
        self::AD_ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementShareAccountListV2DataListAllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
