<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2DataErrorListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
