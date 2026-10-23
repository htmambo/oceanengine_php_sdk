<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareCancelV30DataErrorListShareMode
{
    public const BP_ALL_ACCOUNTS_ToolsBpAssetManagementShareCancelV30DataErrorListShareMode = 'BP_ALL_ACCOUNTS';
    public const COMPANY_ALL_ACCOUNTS_ToolsBpAssetManagementShareCancelV30DataErrorListShareMode = 'COMPANY_ALL_ACCOUNTS';
    public const PART_ToolsBpAssetManagementShareCancelV30DataErrorListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::BP_ALL_ACCOUNTS_ToolsBpAssetManagementShareCancelV30DataErrorListShareMode,
        self::COMPANY_ALL_ACCOUNTS_ToolsBpAssetManagementShareCancelV30DataErrorListShareMode,
        self::PART_ToolsBpAssetManagementShareCancelV30DataErrorListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareCancelV30DataErrorListShareMode', $value));
        }
        return (string) $value;
    }
}
