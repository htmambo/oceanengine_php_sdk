<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAppGetV2DataListAccountType
{
    public const AD_ToolsAppManagementAppGetV2DataListAccountType = 'AD';
    public const BP_ToolsAppManagementAppGetV2DataListAccountType = 'BP';
    public const STAR_ToolsAppManagementAppGetV2DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementAppGetV2DataListAccountType,
        self::BP_ToolsAppManagementAppGetV2DataListAccountType,
        self::STAR_ToolsAppManagementAppGetV2DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAppGetV2DataListAccountType', $value));
        }
        return (string) $value;
    }
}
