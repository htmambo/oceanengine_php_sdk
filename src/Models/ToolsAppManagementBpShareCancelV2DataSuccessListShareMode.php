<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataSuccessListShareMode
{
    public const COMPANY_ToolsAppManagementBpShareCancelV2DataSuccessListShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementBpShareCancelV2DataSuccessListShareMode = 'ALL';
    public const PART_ToolsAppManagementBpShareCancelV2DataSuccessListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementBpShareCancelV2DataSuccessListShareMode,
        self::ALL_ToolsAppManagementBpShareCancelV2DataSuccessListShareMode,
        self::PART_ToolsAppManagementBpShareCancelV2DataSuccessListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataSuccessListShareMode', $value));
        }
        return (string) $value;
    }
}
