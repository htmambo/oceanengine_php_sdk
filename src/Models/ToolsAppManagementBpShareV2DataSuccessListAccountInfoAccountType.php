<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType
{
    public const BP_ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType,
        self::STAR_ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType,
        self::AD_ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2DataSuccessListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
