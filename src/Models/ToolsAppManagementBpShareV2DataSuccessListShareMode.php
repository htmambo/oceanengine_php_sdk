<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataSuccessListShareMode
{
    public const COMPANY_ToolsAppManagementBpShareV2DataSuccessListShareMode = 'COMPANY';
    public const ALL_ToolsAppManagementBpShareV2DataSuccessListShareMode = 'ALL';
    public const PART_ToolsAppManagementBpShareV2DataSuccessListShareMode = 'PART';

    public const ALLOWED_VALUES = [
        self::COMPANY_ToolsAppManagementBpShareV2DataSuccessListShareMode,
        self::ALL_ToolsAppManagementBpShareV2DataSuccessListShareMode,
        self::PART_ToolsAppManagementBpShareV2DataSuccessListShareMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataSuccessListShareMode', $value));
        }
        return (string) $value;
    }
}
