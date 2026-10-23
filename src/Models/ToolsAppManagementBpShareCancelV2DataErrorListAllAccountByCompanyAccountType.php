<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataErrorListAllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
