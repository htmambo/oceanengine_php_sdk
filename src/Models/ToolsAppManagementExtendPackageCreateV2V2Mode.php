<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageCreateV2V2Mode
{
    public const AUTO_ToolsAppManagementExtendPackageCreateV2V2Mode = 'Auto';
    public const CUSTOMIZE_ToolsAppManagementExtendPackageCreateV2V2Mode = 'Customize';
    public const MANUAL_ToolsAppManagementExtendPackageCreateV2V2Mode = 'Manual';

    public const ALLOWED_VALUES = [
        self::AUTO_ToolsAppManagementExtendPackageCreateV2V2Mode,
        self::CUSTOMIZE_ToolsAppManagementExtendPackageCreateV2V2Mode,
        self::MANUAL_ToolsAppManagementExtendPackageCreateV2V2Mode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageCreateV2V2Mode', $value));
        }
        return (string) $value;
    }
}
