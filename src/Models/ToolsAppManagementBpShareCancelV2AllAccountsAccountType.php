<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2AllAccountsAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2AllAccountsAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2AllAccountsAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2AllAccountsAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2AllAccountsAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2AllAccountsAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2AllAccountsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2AllAccountsAccountType', $value));
        }
        return (string) $value;
    }
}
