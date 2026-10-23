<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType
{
    public const ANIMATION_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType = 'Animation';
    public const ARTISTIC_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType = 'Artistic';
    public const FILM_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType = 'Film';
    public const LITERARY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType = 'Literary';
    public const NONE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType = 'None';
    public const OTHERS_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType = 'Others';

    public const ALLOWED_VALUES = [
        self::ANIMATION_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType,
        self::ARTISTIC_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType,
        self::FILM_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType,
        self::LITERARY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType,
        self::NONE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType,
        self::OTHERS_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionGameIpType', $value));
        }
        return (string) $value;
    }
}
