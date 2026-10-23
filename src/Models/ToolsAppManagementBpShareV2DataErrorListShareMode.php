<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataErrorListShareMode
{
    public const COMPANY_ToolsAppManagementBpShareV2DataErrorListShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementBpShareV2DataErrorListShareMode = 'ALL';
    public const PART_ToolsAppManagementBpShareV2DataErrorListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementBpShareV2DataErrorListShareMode,
        self::ALL_ToolsAppManagementBpShareV2DataErrorListShareMode,
        self::PART_ToolsAppManagementBpShareV2DataErrorListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataErrorListShareMode', $value));
        }
        return (string) $value;
    }
}
