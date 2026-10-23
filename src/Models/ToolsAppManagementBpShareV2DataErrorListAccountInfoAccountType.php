<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType
{
    public const BP_ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType,
        self::STAR_ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType,
        self::AD_ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataErrorListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
