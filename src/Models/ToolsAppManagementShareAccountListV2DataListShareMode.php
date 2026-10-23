<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementShareAccountListV2DataListShareMode
{
    public const COMPANY_ToolsAppManagementShareAccountListV2DataListShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementShareAccountListV2DataListShareMode = 'ALL';
    public const PART_ToolsAppManagementShareAccountListV2DataListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementShareAccountListV2DataListShareMode,
        self::ALL_ToolsAppManagementShareAccountListV2DataListShareMode,
        self::PART_ToolsAppManagementShareAccountListV2DataListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementShareAccountListV2DataListShareMode', $value));
        }
        return (string) $value;
    }
}
