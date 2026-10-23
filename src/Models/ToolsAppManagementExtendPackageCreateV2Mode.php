<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageCreateV2Mode
{
    public const CUSTOMIZE_ToolsAppManagementExtendPackageCreateV2Mode = 'Customize';
    public const MANUAL_ToolsAppManagementExtendPackageCreateV2Mode = 'Manual';
    public const AUTO_ToolsAppManagementExtendPackageCreateV2Mode = 'Auto';

    public const ALLOWED_VALUES = [
        self::CUSTOMIZE_ToolsAppManagementExtendPackageCreateV2Mode,
        self::MANUAL_ToolsAppManagementExtendPackageCreateV2Mode,
        self::AUTO_ToolsAppManagementExtendPackageCreateV2Mode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageCreateV2Mode', $value));
        }
        return (string) $value;
    }
}
