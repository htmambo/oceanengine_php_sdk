<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2AccountType
{
    public const AD_ToolsAppManagementAndroidBasicPackageUpdateV2AccountType = 'AD';
    public const BP_ToolsAppManagementAndroidBasicPackageUpdateV2AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementAndroidBasicPackageUpdateV2AccountType,
        self::BP_ToolsAppManagementAndroidBasicPackageUpdateV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2AccountType', $value));
        }
        return (string) $value;
    }
}
