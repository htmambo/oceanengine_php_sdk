<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType
{
    public const ANIMATION_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType = 'Animation';
    public const ARTISTIC_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType = 'Artistic';
    public const FILM_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType = 'Film';
    public const LITERARY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType = 'Literary';
    public const NONE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType = 'None';
    public const OTHERS_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType = 'Others';

    public const ALLOWED_VALUES = [
        self::ANIMATION_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType,
        self::ARTISTIC_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType,
        self::FILM_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType,
        self::LITERARY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType,
        self::NONE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType,
        self::OTHERS_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionGameIpType', $value));
        }
        return (string) $value;
    }
}
