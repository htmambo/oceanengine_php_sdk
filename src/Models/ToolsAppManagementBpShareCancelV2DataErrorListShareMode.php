<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataErrorListShareMode
{
    public const COMPANY_ToolsAppManagementBpShareCancelV2DataErrorListShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementBpShareCancelV2DataErrorListShareMode = 'ALL';
    public const PART_ToolsAppManagementBpShareCancelV2DataErrorListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementBpShareCancelV2DataErrorListShareMode,
        self::ALL_ToolsAppManagementBpShareCancelV2DataErrorListShareMode,
        self::PART_ToolsAppManagementBpShareCancelV2DataErrorListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataErrorListShareMode', $value));
        }
        return (string) $value;
    }
}
