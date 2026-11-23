<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType
{
    public const AD_ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType = 'AD';
    public const BP_ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType,
        self::BP_ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2AllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
