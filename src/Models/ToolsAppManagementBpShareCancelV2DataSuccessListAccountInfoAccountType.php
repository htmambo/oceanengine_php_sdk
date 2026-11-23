<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType
{
    public const AD_ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType = 'AD';
    public const BP_ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType,
        self::BP_ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataSuccessListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
