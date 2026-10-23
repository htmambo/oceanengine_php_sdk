<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType
{
    public const BP_ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType,
        self::STAR_ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType,
        self::AD_ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataErrorListAllAccountAccountType', $value));
        }
        return (string) $value;
    }
}
