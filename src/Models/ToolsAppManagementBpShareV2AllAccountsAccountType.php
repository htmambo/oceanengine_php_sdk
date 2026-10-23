<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2AllAccountsAccountType
{
    public const BP_ToolsAppManagementBpShareV2AllAccountsAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2AllAccountsAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2AllAccountsAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2AllAccountsAccountType,
        self::STAR_ToolsAppManagementBpShareV2AllAccountsAccountType,
        self::AD_ToolsAppManagementBpShareV2AllAccountsAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2AllAccountsAccountType', $value));
        }
        return (string) $value;
    }
}
