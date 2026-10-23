<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2FileOption
{
    public const USE_LAST_IMAGE_VIDEO_ToolsAppManagementAndroidBasicPackageUpdateV2FileOption = 'USE_LAST_IMAGE_VIDEO';
    public const USE_NEW_ToolsAppManagementAndroidBasicPackageUpdateV2FileOption = 'USE_NEW';

    public const ALLOWED_VALUES = [
        self::USE_LAST_IMAGE_VIDEO_ToolsAppManagementAndroidBasicPackageUpdateV2FileOption,
        self::USE_NEW_ToolsAppManagementAndroidBasicPackageUpdateV2FileOption,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2FileOption', $value));
        }
        return (string) $value;
    }
}
