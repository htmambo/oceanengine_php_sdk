<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageUpdateV2Mode
{
    public const ALL_ToolsAppManagementExtendPackageUpdateV2Mode = 'All';
    public const CUSTOMIZE_ToolsAppManagementExtendPackageUpdateV2Mode = 'Customize';
    public const LIST_ToolsAppManagementExtendPackageUpdateV2Mode = 'List';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementExtendPackageUpdateV2Mode,
        self::CUSTOMIZE_ToolsAppManagementExtendPackageUpdateV2Mode,
        self::LIST_ToolsAppManagementExtendPackageUpdateV2Mode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageUpdateV2Mode', $value));
        }
        return (string) $value;
    }
}
