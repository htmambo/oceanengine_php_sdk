<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType
{
    public const BP_ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType,
        self::AD_ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataSuccessListAllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
