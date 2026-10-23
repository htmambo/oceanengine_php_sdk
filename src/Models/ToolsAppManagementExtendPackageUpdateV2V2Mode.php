<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementExtendPackageUpdateV2V2Mode
{
    public const ALL_ToolsAppManagementExtendPackageUpdateV2V2Mode = 'All';
    public const LIST_ToolsAppManagementExtendPackageUpdateV2V2Mode = 'List';
    public const CUSTOMIZE_ToolsAppManagementExtendPackageUpdateV2V2Mode = 'Customize';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppManagementExtendPackageUpdateV2V2Mode,
        self::LIST_ToolsAppManagementExtendPackageUpdateV2V2Mode,
        self::CUSTOMIZE_ToolsAppManagementExtendPackageUpdateV2V2Mode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementExtendPackageUpdateV2V2Mode', $value));
        }
        return (string) $value;
    }
}
