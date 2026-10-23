<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountAccountType', $value));
        }
        return (string) $value;
    }
}
