<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareV30ShareMode
{
    public const BP_ALL_ACCOUNTS_ToolsBpAssetManagementShareV30ShareMode = 'BP_ALL_ACCOUNTS';
    public const COMPANY_ALL_ACCOUNTS_ToolsBpAssetManagementShareV30ShareMode = 'COMPANY_ALL_ACCOUNTS';
    public const PART_ToolsBpAssetManagementShareV30ShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::BP_ALL_ACCOUNTS_ToolsBpAssetManagementShareV30ShareMode,
        self::COMPANY_ALL_ACCOUNTS_ToolsBpAssetManagementShareV30ShareMode,
        self::PART_ToolsBpAssetManagementShareV30ShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareV30ShareMode', $value));
        }
        return (string) $value;
    }
}
