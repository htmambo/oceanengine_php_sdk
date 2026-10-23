<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode
{
    public const BP_ALL_ACCOUNTS_ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode = 'BP_ALL_ACCOUNTS';
    public const COMPANY_ALL_ACCOUNTS_ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode = 'COMPANY_ALL_ACCOUNTS';
    public const PART_ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::BP_ALL_ACCOUNTS_ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode,
        self::COMPANY_ALL_ACCOUNTS_ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode,
        self::PART_ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode', $value));
        }
        return (string) $value;
    }
}
