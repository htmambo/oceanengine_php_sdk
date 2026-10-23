<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataErrorListAllAccountAccountType', $value));
        }
        return (string) $value;
    }
}
