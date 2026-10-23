<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType
{
    public const APK_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType = 'APK';
    public const IMAGE_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType = 'IMAGE';
    public const VIDEO_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::APK_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType,
        self::IMAGE_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType,
        self::VIDEO_ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2FilesFileType', $value));
        }
        return (string) $value;
    }
}
