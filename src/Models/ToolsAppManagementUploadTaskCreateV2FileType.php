<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementUploadTaskCreateV2FileType
{
    public const APK_ToolsAppManagementUploadTaskCreateV2FileType = 'APK';
    public const IMAGE_ToolsAppManagementUploadTaskCreateV2FileType = 'IMAGE';
    public const VIDEO_ToolsAppManagementUploadTaskCreateV2FileType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::APK_ToolsAppManagementUploadTaskCreateV2FileType,
        self::IMAGE_ToolsAppManagementUploadTaskCreateV2FileType,
        self::VIDEO_ToolsAppManagementUploadTaskCreateV2FileType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementUploadTaskCreateV2FileType', $value));
        }
        return (string) $value;
    }
}
