<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2ShareMode
{
    public const COMPANY_ToolsAppManagementBpShareCancelV2ShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementBpShareCancelV2ShareMode = 'ALL';
    public const PART_ToolsAppManagementBpShareCancelV2ShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementBpShareCancelV2ShareMode,
        self::ALL_ToolsAppManagementBpShareCancelV2ShareMode,
        self::PART_ToolsAppManagementBpShareCancelV2ShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2ShareMode', $value));
        }
        return (string) $value;
    }
}
