<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageCreateV2V2AccountType
{
    public const AD_ToolsAppManagementExtendPackageCreateV2V2AccountType = 'AD';
    public const BP_ToolsAppManagementExtendPackageCreateV2V2AccountType = 'BP';
    public const STAR_ToolsAppManagementExtendPackageCreateV2V2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementExtendPackageCreateV2V2AccountType,
        self::BP_ToolsAppManagementExtendPackageCreateV2V2AccountType,
        self::STAR_ToolsAppManagementExtendPackageCreateV2V2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageCreateV2V2AccountType', $value));
        }
        return (string) $value;
    }
}
