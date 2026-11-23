<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType
{
    public const AD_ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType = 'AD';
    public const BP_ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType,
        self::BP_ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType,
        self::STAR_ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataSuccessListAllAccountAccountType', $value));
        }
        return (string) $value;
    }
}
