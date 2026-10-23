<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2AllAccountByCompanyAccountType
{
    public const BP_ToolsAppManagementBpShareV2AllAccountByCompanyAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2AllAccountByCompanyAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2AllAccountByCompanyAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2AllAccountByCompanyAccountType,
        self::STAR_ToolsAppManagementBpShareV2AllAccountByCompanyAccountType,
        self::AD_ToolsAppManagementBpShareV2AllAccountByCompanyAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2AllAccountByCompanyAccountType', $value));
        }
        return (string) $value;
    }
}
