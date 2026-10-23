<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
