<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2ShareMode
{
    public const COMPANY_ToolsAppManagementBpShareV2ShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementBpShareV2ShareMode = 'ALL';
    public const PART_ToolsAppManagementBpShareV2ShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementBpShareV2ShareMode,
        self::ALL_ToolsAppManagementBpShareV2ShareMode,
        self::PART_ToolsAppManagementBpShareV2ShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2ShareMode', $value));
        }
        return (string) $value;
    }
}
