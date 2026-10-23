<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType
{
    public const BP_ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType,
        self::AD_ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataErrorListAllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
