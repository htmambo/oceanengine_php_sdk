<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag
{
    public const AGE_REMINDER_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag = 'AGE_REMINDER';
    public const ANTI_ADDICTION_TIPS_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag = 'ANTI_ADDICTION_TIPS';
    public const DEFAULT_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag = 'DEFAULT';
    public const MATERIAL_SCREENSHOT_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag = 'MATERIAL_SCREENSHOT';
    public const REAL_NAME_VERIFIED_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag = 'REAL_NAME_VERIFIED';

    public const ALLOWED_VALUES = [
        self::AGE_REMINDER_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag,
        self::ANTI_ADDICTION_TIPS_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag,
        self::DEFAULT_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag,
        self::MATERIAL_SCREENSHOT_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag,
        self::REAL_NAME_VERIFIED_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileTag', $value));
        }
        return (string) $value;
    }
}
